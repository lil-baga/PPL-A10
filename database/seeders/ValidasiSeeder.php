<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use App\Models\Validasi;

class ValidasiSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        Validasi::create(['nama' => 'Diterima']);
        Validasi::create(['nama' => 'Diproses']);
        Validasi::create(['nama' => 'Ditolak']);
    }
}
