<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class CustomerController extends Controller
{
    function dashboardCustomer(){
        return view('dashboardCustomer')->with('success', 'GoMikro Dashboard');
    }
}
