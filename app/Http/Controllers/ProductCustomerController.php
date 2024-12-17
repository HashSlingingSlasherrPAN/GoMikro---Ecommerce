<?php

namespace App\Http\Controllers;

use App\Models\Product;
use Illuminate\Http\Request;

class ProductCustomerController extends Controller
{
    public function customer()
    {
        $products = Product::all();

        return view('dashboardCustomer', compact('products'));
    }
}
