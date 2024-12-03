<?php

namespace App\Http\Controllers;
use App\Models\User;
use Illuminate\Support\Facades\Hash;
use Illuminate\Http\Request;

class RegisterController extends Controller
{
    public function showRegisterForm(){
        return view('registerCustomer');
    }
    public function register(Request $request){
        $request->validate([
            'name'=>'required|string|max:255',
            'email'=>'required|string|email|max:255|unique:users',
            'password'=>'required|string|min:8|confirmed',
            'address'=>'required|string|max:255',
            'phone'=>'required|string|max:15|unique:users',
        ]);

        User::create([
            'name'=>$request->name,
            'email'=>$request->email,
            'password'=>Hash::make($request->password),
            'address'=>$request->address,
            'phone'=>$request->phone,
            'role'=>'customer',
        ]);
        return redirect()->route('login')->with('success', 'Register Berhasil, Silahkan Login');
    }

}
