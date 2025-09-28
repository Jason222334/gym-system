<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use App\Models\User;
use Illuminate\Support\Facades\Hash;

class DatabaseSeeder extends Seeder
{
    public function run()
    {
        // Crear usuario administrador
        User::create([
            'username' => 'admin',
            'password' => Hash::make('admin123'),
            'full_name' => 'Administrator',
            'role' => 'admin',
            'gender' => 'male', // agregar si es necesario
            'address' => 'Gym Address',
            'contact' => '123456789'
        ]);

        // Crear usuario regular
        User::create([
            'username' => 'ahmednasser',
            'password' => Hash::make('password123'),
            'full_name' => 'Ahmed Nasser',
            'role' => 'admin', // o 'user' dependiendo del acceso
            'gender' => 'male',
            'address' => 'Cairo, Egypt',
            'contact' => '987654321'
        ]);
    }
}