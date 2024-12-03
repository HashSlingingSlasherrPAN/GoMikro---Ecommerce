<?php

namespace Database\Seeders;

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
            [
                'name' => 'Jefta',
                'email' => 'admin123@example.com',
                'password' => Hash::make('admin123'),
                'address' => '123 Main Street',
                'phone' => '1234567890',
                'role' => 'admin',
                'created_at' => now(),
                'updated_at' => now(),
            ],

            [
                'name' => 'Farhan',
                'email' => 'Farhan123@example.com',
                'password' => Hash::make('Farhan123'),
                'address' => '123 Main Street',
                'phone' => '081234567890',
                'role' => 'customer',
                'created_at' => now(),
                'updated_at' => now(),
            ],
        ]);
    }
}
