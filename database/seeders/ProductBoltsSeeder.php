<?php

namespace Database\Seeders;

use App\Models\ProductBolt;
use App\Models\ProductCategory;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class ProductBoltsSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        $category = ProductCategory::where('name', 'Baut')->first();

        // Tambahkan data produk baut
        ProductBolt::create([
            'category_id' => $category->id,
            'coding' => 'B123',
            'kode' => 'Bolt001',
            'keterangan' => 'Baut stainless untuk mesin',
            'deskripsi' => 'Baut berukuran sedang untuk keperluan perbaikan mesin.',
            'ukuran' => 'M8 x 40',
            'kunci' => '12mm',
            'link1' => 'https://example.com/baut-001',
            'image1' => 'baut-001.jpg',
            'barcode' => '1122334455',
        ]);

        ProductBolt::create([
            'category_id' => $category->id,
            'coding' => 'B124',
            'kode' => 'Bolt002',
            'keterangan' => 'Baut baja untuk konstruksi',
            'deskripsi' => 'Baut dengan kekuatan tinggi untuk keperluan konstruksi.',
            'ukuran' => 'M10 x 50',
            'kunci' => '14mm',
            'link1' => 'https://example.com/baut-002',
            'image1' => 'baut-002.jpg',
            'barcode' => '5566778899',
        ]);
    }
}
