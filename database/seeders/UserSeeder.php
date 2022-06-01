<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use App\Models\User;

class UserSeeder extends Seeder
{
    
    public function run()
    {
        $admin = User::create([
            'name' => 'Admin',
            'email' => 'admin@gmail.com',
            'password' => bcrypt('1234')
        ]);

        $admin->assignRole('admin');

        
        $user = User::create([
            'name' => 'User',
            'email' => 'user@gmail.com',
            'password' => bcrypt('1234')
        ]);

        $user->assignRole('user');
    }
}
