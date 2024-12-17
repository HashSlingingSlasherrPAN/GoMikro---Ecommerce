<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use App\Models\Product;
use App\Models\User;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Hash;
use Illuminate\Support\Facades\Session;
use App\Models\Cart;

class SessioningController extends Controller
{


 function login (Request $request) {
     $request->validate([
         'email' => 'required|email',

         'password' => 'required|string|min:8|regex:/^(?=.*[a-z])(?=.*[A-Z])(?=.*\d).+$/',
     ],[
         'email.required' => 'Email harus diisi',
         'email.email' => 'Email tidak valid',
         'password.min' => 'Password minimal 8 karakter',
         'password.regex' => 'Password harus mengandung huruf besar, huruf kecil, dan angka',
         'password.required' => 'Password harus diisi',
     ]);


     $credentials = $request->only('email', 'password'); 

     if (Auth::attempt($credentials)) {

         $user = Auth::user();

         if ($user->role == 'admin') {
             return redirect('dashboardAdmin')->with('success', 'Selamat datang Admin');
         } elseif ($user->role == 'customer') {
             return redirect('customer/dashboardCustomer')->with('success', 'Login Berhasil, Selamat datang ' . $user->name . '!');
         }
     }

     // If authentication fails
     return back()->withErrors(['name' => 'Invalid credentials'])->withInput();
 }
 public function register(Request $request){
    $request->validate([
        'name'=>'required|string|max:255',
        'email'=>'required|string|email|max:255|unique:users',
        'password'=>'required|string|min:8|regex:/^(?=.*[a-z])(?=.*[A-Z])(?=.*\d).+$/|confirmed',
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

public function mycart(){

    if (Auth::id()){

        $user = Auth::user();
        $userid = $user->id;
        $count = Cart::where('user_id',$userid)->count();
        $cart = Cart::where('user_id',$userid)->get();

    }else{
        $count = '';
    }
    return view('mycart', compact('count','cart'));
}

public function profile() {
    if (Auth::id()){

        $user = Auth::user();
        $userid = $user->id;
        $count = Cart::where('user_id',$userid)->count();
        $cart = Cart::where('user_id',$userid)->get();

    }else{
        $count = '';
    }
    return view('profile', compact('count','cart'));
    
}


 public function logout(Request $request)
 {
     Auth::logout(); // Log out the user
     $request->session()->invalidate(); // Invalidate the session
     $request->session()->regenerateToken(); // Regenerate session token for security
     return redirect()->route('login')->with('success', 'Logged out successfully.');
 }


public function productDetail($id){
    $products = Product::all();
    $user = Auth::user();
    $userid = $user->id;
    $count = Cart::where('user_id',$userid)->count();


    $data = Product::find($id);
    return view('productDetail', compact('data', 'count'));
}

 function pageLogin() {
     return view('login');
 }
 public function pageRegister(){
    return view('registerCustomer');
}
 function index() {
    return view('dashboardCustomer');
}
}
