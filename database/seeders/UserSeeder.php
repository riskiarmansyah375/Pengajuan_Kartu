<?php

namespace Database\Seeders;

use App\Models\User;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\Hash;

class UserSeeder extends Seeder
{
    public function run(): void
    {
        // ADMIN
        User::create([
            'name' => 'Administrator',
            'email' => 'admin21@gmail.com',
            'password' => Hash::make('12345678'),
            'role_id' => 1
        ]);

        // RT
        User::create([
            'name' => 'Ketua RT',
            'email' => 'rt@gmail.com',
            'password' => Hash::make('12345678'),
            'role_id' => 2
        ]);

        // WARGA
        User::create([
            'name' => 'Warga Demo',
            'email' => 'warga@gmail.com',
            'password' => Hash::make('12345678'),
            'role_id' => 3
        ]);
    }
}