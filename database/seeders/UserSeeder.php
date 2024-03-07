<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use App\Models\User;

class UserSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        User::create([
            'name' => 'User LOD',
            'username' => 'user_lod',
            'role' => 'user',
            'email' => 'naufal@gmail.com',
            'password' => bcrypt('password')
        ]);
        User::create([
            'name' => 'Naufal Fakhrian',
            'username' => 'naufalf',
            'role' => 'user',
            'email' => 'naufalf@gmail.com',
            'password' => bcrypt('password')
        ]);
        User::create([
            'name' => 'Bagas FA',
            'username' => 'bagasfa',
            'role' => 'user',
            'email' => 'bagasfa@gmail.com',
            'password' => bcrypt('password')
        ]);
    }
}
