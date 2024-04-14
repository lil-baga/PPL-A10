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
        User::create([
            'name' => 'Admin C&C',
            'email' => 'adminc&c@gmail.com',
            'password' => bcrypt('adminroot123'),
            'address' => 'Jl. Admin Gg. Database No. 4',
            'phone_number' => '081333760081',
            'roles_id' => '1',
        ]);
    }
}
