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
            'name' => 'Developer LOD',
            'role' => 'admin',
            'email' => 'dev@lodagency.co.id',
            'password' => bcrypt('password')
        ]);
        User::create([
            'name' => 'Naufal Fakhrian',
            'role' => 'user',
            'email' => 'naufal@gmail.com',
            'password' => bcrypt('password')
        ]);
    }
}
