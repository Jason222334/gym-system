<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use App\Models\User;
use Illuminate\Support\Facades\Hash;

class DatabaseSeeder extends Seeder
{
    public function run()
    {
        // Crear usuario administrador solo si no existe
        if (!User::where('username', 'admin')->exists()) {
            User::create([
                'username' => 'admin',
                'password' => Hash::make('admin123'),
                'full_name' => 'Administrator',
                'role' => 'admin',
                'gender' => 'male',
                'address' => 'Gym Address',
                'contact' => '123456789'
            ]);
            echo "Admin user created\n";
        } else {
            echo "Admin user already exists\n";
        }

        // Crear usuario regular solo si no existe
        if (!User::where('username', 'ahmednasser')->exists()) {
            User::create([
                'username' => 'ahmednasser',
                'password' => Hash::make('password123'),
                'full_name' => 'Ahmed Nasser',
                'role' => 'admin',
                'gender' => 'male',
                'address' => 'Cairo, Egypt', 
                'contact' => '987654321'
            ]);
            echo "Ahmed user created\n";
        } else {
            echo "Ahmed user already exists\n";
        }
    }
}