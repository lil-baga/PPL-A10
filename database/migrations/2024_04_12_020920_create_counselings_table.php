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
            $table->binary('bussiness_letter');
            $table->integer('farm_quantity');
            $table->text('theme_request');
            $table->binary('farm_picture');
            $table->enum('validation', ['Ditolak', 'Diproses', 'Diterima'])->default('Diproses');
            $table->date('counseling_date')->nullable();
            $table->text('government_note')->nullable();
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
