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
        Schema::create('governments', function (Blueprint $table) {
            $table->id('id_government');
            $table->string('name');
            $table->string('address');
            $table->integer('phone_number');
            $table->integer('access_code')->nullable();
            $table->timestamps('timestamps');
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('governments');
    }
};
