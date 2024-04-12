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
        Schema::create('counselings', function (Blueprint $table) {
            $table->id('id_counseling');
            $table->binary('covering_letter');
            $table->binary('bussiness_letter');
            $table->integer('farm_quantity');
            $table->integer('food_quantity');
            $table->binary('farm_picture');
            $table->enum('validation', ['Ditolak', 'Diproses', 'Diterima'])->default('Diproses');
            $table->binary('confirm_picture');
            $table->enum('confirmation', ['Belum Diambil', 'Sudah Diambil'])->default('Belum Diambil');
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('counselings');
    }
};
