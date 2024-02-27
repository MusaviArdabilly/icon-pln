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
            'username' => 'dev_lod',
            'role' => 'admin',
            'email' => 'dev@lodagency.co.id',
            'password' => bcrypt('password')
        ]);
        User::create([
            'name' => 'Naufal Fakhrian',
            'username' => 'user_lod',
            'role' => 'user',
            'email' => 'naufal@gmail.com',
            'password' => bcrypt('password')
        ]);
        User::create([
            'name' => 'Super Admin',
            'username' => '@super_admin',
            'role' => 'super_admin',
            'email' => 'superAdmin@lodagency.co.id',
            'password' => bcrypt('lodxicon')
        ]);
    }
}
