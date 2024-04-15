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
            'name' => 'Admin C&C',
            'email' => 'adminc&c@gmail.com',
            'password' => bcrypt('adminroot123'),
            'address' => 'Jl. Admin Gg. Database No. 4',
            'phone_number' => '081333760081',
            'roles_id' => '1',
        ]);

        User::create([
            'name' => 'Purwoto',
            'email' => 'purwoto_dkppk@gmail.com',
            'password' => bcrypt('purwoto1'),
            'address' => 'Jl. Letjend Suprapto No.139, Sumbersari, Jember',
            'phone_number' => '0331337275',
            'access_code' => $accessCode,
            'roles_id' => '3',
        ]);

        User::create([
            'name' => 'Arifandi',
            'email' => 'arifandi@gmail.com',
            'password' => bcrypt('arifandi7'),
            'address' => 'Jl. Sarangan No.5, Pakusari, Jember,',
            'phone_number' => '081657832490',
            'roles_id' => '2',
        ]);
    }
}
