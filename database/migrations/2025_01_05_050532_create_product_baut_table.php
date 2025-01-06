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
        Schema::create('product_bolts', function (Blueprint $table) {
            $table->id(); // Primary key
            $table->unsignedBigInteger('category_id')->nullable();
            $table->foreign('category_id')->references('id')->on('product_categories')->onDelete('cascade');
            $table->string('coding')->nullable(); // Coding untuk baut
            $table->string('kode')->nullable(); // Kode unik baut
            $table->string('keterangan')->nullable(); // Keterangan tambahan
            $table->text('deskripsi')->nullable(); // Deskripsi detail produk
            $table->string('ukuran')->nullable(); // Ukuran baut (contoh: M8, M10)
            $table->string('kunci')->nullable(); // Jenis kunci yang digunakan (contoh: Hex, Allen key)
            $table->string('link1')->nullable(); // Link informasi tambahan 1
            $table->string('link2')->nullable(); // Link informasi tambahan 2
            $table->string('link3')->nullable(); // Link informasi tambahan 3
            $table->string('link4')->nullable(); // Link informasi tambahan 4
            $table->string('image1')->nullable(); // Path atau URL gambar utama 1
            $table->string('image2')->nullable(); // Path atau URL gambar utama 2
            $table->string('image3')->nullable(); // Path atau URL gambar utama 3
            $table->string('image4')->nullable(); // Path atau URL gambar utama 4
            $table->string('image_modal1')->nullable(); // Path atau URL gambar modal 1
            $table->string('image_modal2')->nullable(); // Path atau URL gambar modal 2
            $table->string('image_modal3')->nullable(); // Path atau URL gambar modal 3
            $table->string('image_modal4')->nullable(); // Path atau URL gambar modal 4
            $table->string('barcode')->nullable(); // Barcode produk
            $table->timestamps(); // Kolom created_at dan updated_at
        });
        
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('product_baut');
    }
};
