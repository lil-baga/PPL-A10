<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use App\Models\Konfirmasi;

class KonfirmasiSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        Konfirmasi::create(['nama' => 'Sudah Diterima']);
        Konfirmasi::create(['nama' => 'Proses Validasi']);
        Konfirmasi::create(['nama' => 'Belum Diterima']);
    }
}
