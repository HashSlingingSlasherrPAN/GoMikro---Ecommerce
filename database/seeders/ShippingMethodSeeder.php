<?php

namespace Database\Seeders;

use App\Models\ShippingMethod;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class ShippingMethodSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        ShippingMethod::create(['name' => 'JNE', 'price' => 20000]);
        ShippingMethod::create(['name' => 'J&T', 'price' => 25000]);
        ShippingMethod::create(['name' => 'Si Cepat', 'price' => 30000]);
    }
}
