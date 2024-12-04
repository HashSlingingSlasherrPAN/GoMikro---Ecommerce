<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class CategorySeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        DB::table('categories')->insert([
            ['name' => 'Elektronik'],
            ['name' => 'Pakaian'],
            ['name' => 'Makanan & Minuman'],
            ['name' => 'Kecantikan'],
            ['name' => 'Peralatan Rumah Tangga'],
        ]);
    }
}
