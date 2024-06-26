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
        Schema::create('subsidi', function (Blueprint $table) {
            $table->id();
            $table->binary('surat_pengantar');
            $table->binary('surat_usaha');
            $table->integer('jumlah_ternak');
            $table->integer('jumlah_pakan');
            $table->binary('foto_peternakan');
            $table->enum('validasi_id', ['3', '2', '1'])->default('2');
            $table->binary('foto_konfirmasi')->nullable();
            $table->enum('konfirmasi_id', ['3', '2', '1'])->default('2');
            $table->timestamp('tanggal_pengambilan')->nullable();
            $table->text('catatan')->nullable();
            $table->foreignId('users_id');
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('subsidi');
    }
};
