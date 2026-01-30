<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use App\Models\User;
use Illuminate\Support\Facades\Hash;

class AdminUserSeeder extends Seeder
{
    public function run(): void
    {
        User::create([
            'name' => 'Admin',
            'email' => 'admin@gmail.com',
            'password' => Hash::make('admin123'),
            'role' => 'admin',
        ]);

         User::create([
            'name' => 'Pimpinan',
            'email' => 'pimpinan@gmail.com',
            'password' => Hash::make('pimpinan123'),
            'role' => 'user',
        ]);
    }
}
