<?php

namespace Database\Seeders;

// use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use App\Models\User;

class DatabaseSeeder extends Seeder
{
    /**
     * Seed the application's database.
     */
    public function run(): void
    {
        // \App\Models\User::factory(10)->create();

        // User::factory()->create([
        //     'name' => 'Admin C&C',
        //     'email' => 'adminc&c@gmail.com',
        //     'password' => bcrypt('adminroot123')
        //     'address' => 'Jl. Admin Gg. Database No. 4'
        //     'roles'
        // ]);
        $this->call([
            UserSeeder::class,
            RoleSeeder::class,
            KecamatanSeeder::class,
            ValidasiSeeder::class,
            KonfirmasiSeeder::class,
            ]);
    }
}
