<?php

namespace Database\Seeders;

use App\Models\Cabang;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class CabangSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        //
        Cabang::create([
            'name' => 'Jakarta',
            'address' => 'Daan Mogot Jakarta',
            'email' => 'birumegahabadi@yahoo.com',
            'phone' => '021238324'
        ]);
    }
}
