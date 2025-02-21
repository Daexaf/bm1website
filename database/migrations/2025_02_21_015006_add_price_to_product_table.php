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
        Schema::table('product_oil', function (Blueprint $table) {
            $table->decimal('price', 10, 2)->after('barcode')->nullable();
        });

        Schema::table('product_bolts', function (Blueprint $table) {
            $table->decimal('price', 10, 2)->after('barcode')->nullable();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::table('product_oil', function (Blueprint $table) {
            $table->dropColumn('price');
        });

        Schema::table('product_bolts', function (Blueprint $table) {
            $table->dropColumn('price');
        });
    }
};
