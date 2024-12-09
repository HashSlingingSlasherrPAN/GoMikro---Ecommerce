<?php

namespace Database\Seeders;

use App\Models\User;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class DummyUsersSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        $userData = [
            [
                'name' => 'Fajrin',
                'email' => 'Fajrin@gmail.com',
                'password' => bcrypt('Password1234'),
                'address' => '123 Main Streets',
                'phone' => '085732268888',
                'role' => 'customer',

            ],
            [
                'name' => 'Iwan',
                'email' => 'Iwan@gmail.com',
                'password' => bcrypt('Password123'),
                'address' => '123 Main Street',
                'phone' => '12345676666',
                'role' => 'admin',

            ],
        ];

        foreach ($userData as $key => $value) {
            User::create($value);
        }
}

}
