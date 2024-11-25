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
        DB::table('user')->insert([
            [
                'name' => 'Jefta',
                'email' => 'jefta@example.com',
                'username' => 'jefta',
                'password' => Hash::make('jefta123'),
                'alamat' => '123 Main Street',
                'no_telepon' => '1234567890',
                'id_role' => 1,
                'email_verified_at' => now(),
                'created_at' => now(),
                'updated_at' => now(),
            ],
        ]);
    }
}
