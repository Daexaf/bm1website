<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\HasMany;

class ProductCategory extends Model
{
    use HasFactory;

    protected $fillable = ['name', 'description'];

    // Relasi ke produk
    public function oils(): HasMany
    {
        return $this->hasMany(ProductOil::class);
    }

    /**
     * Relasi dengan produk baut
     */
    public function bolts(): HasMany
    {
        return $this->hasMany(ProductBolt::class);
    }
}
