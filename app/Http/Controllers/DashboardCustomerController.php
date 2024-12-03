<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class DashboardCustomerController extends Controller
{
    public function dashboardCustomer(){
        return view('dashboardCustomer');
    }
}
