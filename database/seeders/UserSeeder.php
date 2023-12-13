<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Hash;

class UserSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        DB::table('users')->insert([
            'name' => 'John',
            'email' => 'john@gmail.com',
            'email_verified_at' => now(),
            'password' => '12345678', 
            'remember_token' => rand(0, 20),
            'created_at' => now(),
            'updated_at' => now(),
        ]);

        DB::table('users')->insert([
            'name' => 'Jack',
            'email' => 'jack@gmail.com',
            'email_verified_at' => now(),
            'password' => '12345678',
            'remember_token' => rand(0, 20),
            'created_at' => now(),
            'updated_at' => now(),
        ]);

        DB::table('users')->insert([
            'name' => 'Alison',
            'email' => 'alison@gmail.com',
            'email_verified_at' => now(),
            'password' => '12345678',
            'remember_token' => rand(0, 20),
            'created_at' => now(),
            'updated_at' => now(),
        ]);
    }
}
