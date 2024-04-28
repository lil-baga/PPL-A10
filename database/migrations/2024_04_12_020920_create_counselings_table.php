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
        Schema::create('penyuluhan', function (Blueprint $table) {
            $table->id();
            $table->binary('surat_pengantar');
            $table->integer('suhu_kandang');
            $table->integer('kadar_air');
            $table->integer('kadar_pakan');
            $table->text('kondisi_ayam');
            $table->binary('foto_ayam');
            $table->binary('foto_peternakan');
            $table->enum('validasi', ['Ditolak', 'Diproses', 'Diterima'])->default('Diproses');
            $table->date('tanggal_penyuluhan')->nullable();
            $table->text('catatan')->nullable();
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('penyuluhan');
    }
};
