<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

return new class extends Migration
{
    /**
     * Run the migrations.
     */
    public function up(): void
    {
        Schema::create('product_oil', function (Blueprint $table) {
            $table->id();
            $table->unsignedBigInteger('category_id')->nullable();
            $table->foreign('category_id')->references('id')->on('product_categories')->onDelete('cascade');
            $table->string('name'); // Nama produk
            $table->string('api'); // API classification, misalnya "SN", "SP", dll.
            $table->string('sae'); // SAE viscosity grade, misalnya "10W-40"
            $table->decimal('content', 8, 2); // Kapasitas produk dalam liter (misalnya: 1.00)
            $table->string('link1')->nullable(); // Link informasi tambahan 1
            $table->string('link2')->nullable(); // Link informasi tambahan 2
            $table->string('link3')->nullable(); // Link informasi tambahan 3
            $table->string('link4')->nullable(); // Link informasi tambahan 4
            $table->string('image1')->nullable(); // Path atau URL gambar 1
            $table->string('image2')->nullable(); // Path atau URL gambar 2
            $table->string('image3')->nullable(); // Path atau URL gambar 3
            $table->string('sni')->nullable(); // Apakah produk berstandar SNI? (true/false)
            $table->string('npt')->nullable(); // Nomor NPT jika tersedia
            $table->string('barcode')->nullable(); // Barcode produk
            $table->boolean('is_active')->default(false);
            $table->timestamps(); // Kolom created_at dan updated_at
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('product_oil');
    }
};
