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
        Schema::create('food', function (Blueprint $table) {
            $table->id();
            $table->binary('covering_letter');
            $table->binary('business_letter');
            $table->integer('farm_quantity');
            $table->integer('food_quantity');
            $table->binary('farm_picture');
            $table->enum('validation', ['Ditolak', 'Diproses', 'Diterima'])->default('Diproses');
            $table->binary('confirm_picture')->nullable();
            $table->enum('confirmation', ['Belum Diambil', 'Proses Validasi', 'Sudah Diambil'])->default('Proses Validasi');
            $table->text('government_note')->nullable();
            $table->foreignId('users_id');
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('food');
    }
};
