<?php

namespace Database\Seeders;

use App\Models\ShippingMethod;
use App\Models\User;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class OrderSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        $users = User::all();
        $shippingMethods = ShippingMethod::all();

        \App\Models\Order::create([
            'users_id' => $users->random()->id, // Pastikan User ada di database
            'shipping_methods_id' => $shippingMethods->random()->id, // Pastikan ShippingMethod ada
            'total_price' => 100000, // Set total dengan nilai yang sesuai
            'status' => 'pending', // Status contoh
        ]);
    }
}
