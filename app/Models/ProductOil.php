<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\BelongsTo;

class ProductOil extends Model
{
    use HasFactory;

    protected $fillable = [
        'category_id',
        'name',
        'api',
        'sae',
        'content',
        'link1',
        'link2',
        'link3',
        'link4',
        'image1',
        'image2',
        'image3',
        'sni',
        'npt',
        'npb',
        'barcode',
        'is_active'
    ];

    public function category(): BelongsTo
    {
        return $this->belongsTo(ProductCategory::class, 'category_id');
    }
}
