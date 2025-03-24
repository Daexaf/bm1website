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
            $table->decimal('viscosity_kinematic', 5, 2)->nullable();
            $table->smallInteger('viscosity_index')->nullable();
            $table->decimal('viscosity_hi_temp', 5, 2)->nullable();
            $table->integer('viscosity_low_temp')->nullable();
            $table->smallInteger('pour_point')->nullable();
            $table->decimal('total_base_number', 5, 2)->nullable();
            $table->decimal('sulfated_ash', 5, 3)->nullable();
            $table->smallInteger('flash_point')->nullable();
            $table->decimal('density', 5, 3)->nullable();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::table('product_oil', function (Blueprint $table) {
            $table->decimal('viscosity_kinematic', 5, 2)->nullable();
            $table->smallInteger('viscosity_index')->nullable();
            $table->decimal('viscosity_hi_temp', 5, 2)->nullable();
            $table->integer('viscosity_low_temp')->nullable();
            $table->smallInteger('pour_point')->nullable();
            $table->decimal('total_base_number', 5, 2)->nullable();
            $table->decimal('sulfated_ash', 5, 3)->nullable();
            $table->smallInteger('flash_point')->nullable();
            $table->decimal('density', 5, 3)->nullable();
        });
    }
};
