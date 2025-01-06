<?php

namespace Database\Seeders;

use App\Models\ProductCategory;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class ProductCategoriesSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        ProductCategory::create(['name' => 'Oli', 'description' => 'Produk oli untuk kendaraan']);
        ProductCategory::create(['name' => 'Baut', 'description' => 'Produk baut untuk perbaikan kendaraan']);
    }
}
