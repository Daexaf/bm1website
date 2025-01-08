<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\BelongsTo;

class ProductBolt extends Model
{
    use HasFactory;

    protected $fillable = [
        'category_id',
        'category_type',
        'coding',
        'kode',
        'keterangan',
        'deskripsi',
        'ukuran',
        'kunci',
        'link1',
        'link2',
        'link3',
        'link4',
        'image1',
        'image_modal1',
        'image_modal2',
        'image_modal3',
        'barcode',
        'is_active',
    ];

    public function category(): BelongsTo
    {
        return $this->belongsTo(ProductCategory::class, 'category_id');
    }
}
