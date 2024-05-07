<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\Hash;
use App\Models\User;

class UsersTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        User::create([
            'user_name' => 'Akif',
            'email' => 'akif@test-net.com',
            'password' => '123456@',
        ]);

        User::create([
            'user_name' => 'Test',
            'email' => 'Test@test-net.com',
            'password' => '123456@',
        ]);
    }
}
