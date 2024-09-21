<?php

namespace Database\Seeders;

use App\Models\User;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\Hash;

class AdminUserSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        //
        User::create([
                'name' => 'Admin',
                'email' => 'hannahindonesia.id@gmail.com',
                'password' => Hash::make('hannahasaindonesia2024'),
                'role' => 'admin',
                'is_active' => true,
            ]);

        User::create([
                'name' => "User1",
                'email' => 'user1@gmail.com',
                'password' => Hash::make('qwerty123'),
                'role' => 'user',
                'is_active' => true,
            ]);

    }
}
