<?php

namespace Database\Seeders;

use App\Models\ProductCategory;
use App\Models\ProductOil;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class ProductOilSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        $category = ProductCategory::where('name', 'Oli')->first();

        // Tambahkan data produk oli
        ProductOil::create([
            'category_id' => $category->id,
            'name' => 'Oli Mesin Premium',
            'API' => 'SN',
            'SAE' => '10W-40',
            'content' => '800',
            'link1' => 'https://example.com/oli-premium',
            'image1' => 'oli-premium.jpg',
            'barcode' => '1234567890',
        ]);

        ProductOil::create([
            'category_id' => $category->id,
            'name' => 'Oli Mesin Ekonomis',
            'API' => 'SL',
            'SAE' => '5W-30',
            'content' => '950',
            'link1' => 'https://example.com/oli-ekonomis',
            'image1' => 'oli-ekonomis.jpg',
            'barcode' => '0987654321',
        ]);
    }
}
