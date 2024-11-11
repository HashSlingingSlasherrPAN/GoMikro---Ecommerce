<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class CustomerController extends Controller
{
    function dashboardCustomer(){
        return view('dashboard')->with('success', 'GoMikro Dashboard');
    }
}
