<?php

namespace Database\Seeders;

use App\Models\Kecamatan;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class KecamatanSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        $currentTime = now();

        $kecamatan = [
            [
                'id' => 1,
                'nama' => 'Sumbersari',
                'created_at' => $currentTime,
                'updated_at' => $currentTime
            ],
            [
                'id' => 2,
                'nama' => 'Ajung',
                'created_at' => $currentTime,
                'updated_at' => $currentTime
            ],
            [
                'id' => 3,
                'nama' => 'Ambulu',
                'created_at' => $currentTime,
                'updated_at' => $currentTime
            ],
            [
                'id' => 4,
                'nama' => 'Tanggul',
                'created_at' => $currentTime,
                'updated_at' => $currentTime
            ],
            [
                'id' => 5,
                'nama' => 'Tempurejo',
                'created_at' => $currentTime,
                'updated_at' => $currentTime
            ],
            [
                'id' => 6,
                'nama' => 'Umbulsari',
                'created_at' => $currentTime,
                'updated_at' => $currentTime
            ],
            [
                'id' => 7,
                'nama' => 'Wuluhan',
                'created_at' => $currentTime,
                'updated_at' => $currentTime
            ],
            [
                'id' => 8,
                'nama' => 'Patrang',
                'created_at' => $currentTime,
                'updated_at' => $currentTime
            ],
            [
                'id' => 9,
                'nama' => 'Arjasa',
                'created_at' => $currentTime,
                'updated_at' => $currentTime
            ],
            [
                'id' => 10,
                'nama' => 'Bangsalsari',
                'created_at' => $currentTime,
                'updated_at' => $currentTime
            ],
            [
                'id' => 11,
                'nama' => 'Balung',
                'created_at' => $currentTime,
                'updated_at' => $currentTime
            ],
            [
                'id' => 12,
                'nama' => 'Gumukmas',
                'created_at' => $currentTime,
                'updated_at' => $currentTime
            ],
            [
                'id' => 13,
                'nama' => 'Jelbuk',
                'created_at' => $currentTime,
                'updated_at' => $currentTime
            ],
            [
                'id' => 14,
                'nama' => 'Jenggawah',
                'created_at' => $currentTime,
                'updated_at' => $currentTime
            ],
            [
                'id' => 15,
                'nama' => 'Jombang',
                'created_at' => $currentTime,
                'updated_at' => $currentTime
            ],
            [
                'id' => 16,
                'nama' => 'Kalisat',
                'created_at' => $currentTime,
                'updated_at' => $currentTime
            ],
            [
                'id' => 17,
                'nama' => 'Kencong',
                'created_at' => $currentTime,
                'updated_at' => $currentTime
            ],
            [
                'id' => 18,
                'nama' => 'Ledokombo',
                'created_at' => $currentTime,
                'updated_at' => $currentTime
            ],
            [
                'id' => 19,
                'nama' => 'Mayang',
                'created_at' => $currentTime,
                'updated_at' => $currentTime
            ],
            [
                'id' => 20,
                'nama' => 'Mumbulsari',
                'created_at' => $currentTime,
                'updated_at' => $currentTime
            ],
            [
                'id' => 21,
                'nama' => 'Panti',
                'created_at' => $currentTime,
                'updated_at' => $currentTime
            ],
            [
                'id' => 22,
                'nama' => 'Pakusari',
                'created_at' => $currentTime,
                'updated_at' => $currentTime
            ],
            [
                'id' => 23,
                'nama' => 'Puger',
                'created_at' => $currentTime,
                'updated_at' => $currentTime
            ],
            [
                'id' => 24,
                'nama' => 'Rambipuji',
                'created_at' => $currentTime,
                'updated_at' => $currentTime
            ],
            [
                'id' => 25,
                'nama' => 'Semboro',
                'created_at' => $currentTime,
                'updated_at' => $currentTime
            ],
            [
                'id' => 26,
                'nama' => 'Silo',
                'created_at' => $currentTime,
                'updated_at' => $currentTime
            ],
            [
                'id' => 27,
                'nama' => 'Sukorambi',
                'created_at' => $currentTime,
                'updated_at' => $currentTime
            ],
            [
                'id' => 28,
                'nama' => 'Sukowono',
                'created_at' => $currentTime,
                'updated_at' => $currentTime
            ],
            [
                'id' => 29,
                'nama' => 'Sumberbaru',
                'created_at' => $currentTime,
                'updated_at' => $currentTime
            ],
            [
                'id' => 30,
                'nama' => 'Sumberjambe',
                'created_at' => $currentTime,
                'updated_at' => $currentTime
            ]
        ];

        DB::table('kecamatan')->insert($kecamatan);
    }
}
