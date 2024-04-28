<?php

namespace Database\Seeders;

use App\Models\User;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class UserSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        $accessCode = mt_rand(1000, 9999);

        User::create([
            'nama' => 'Admin C&C',
            'email' => 'adminc&c@gmail.com',
            'password' => bcrypt('adminroot123'),
            'alamat' => 'Jl. Admin Gg. Database No. 4',
            'kontak' => '081333760081',
            'roles_id' => '1',
        ]);

        User::create([
            'nama' => 'Purwoto',
            'email' => 'purwoto_dkppk@gmail.com',
            'password' => bcrypt('purwoto1'),
            'alamat' => 'Jl. Letjend Suprapto No.139, Sumbersari, Jember',
            'kontak' => '0331337275',
            'kode_akses' => $accessCode,
            'roles_id' => '3',
        ]);

        User::create([
            'nama' => 'Arifandi',
            'email' => 'arifandi@gmail.com',
            'password' => bcrypt('arifandi7'),
            'alamat' => 'Jl. Sarangan No.5, Pakusari, Jember,',
            'kontak' => '081657832490',
            'roles_id' => '2',
        ]);
    }
}
