<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\Hash;
use App\Models\User;

class UserSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        User::create([
            'name'=> 'Admin',
            'role'=> 'admin',
            'email' => 'admin@gamil.com',
            'password' => Hash::make('admin@gamil.com'),
        ]);
        User::create([
            'name'=> 'User',
            'role'=> 'user',
            'email' => 'user@gamil.com',
            'password' => Hash::make('user@gamil.com'),
        ]);
    }
}
