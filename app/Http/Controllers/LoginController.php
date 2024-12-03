<?php

namespace App\Http\Controllers;

use Illuminate\Support\Facades\Auth;
use Illuminate\Http\Request;

class LoginController extends Controller
{
    public function showLoginForm()
    {
        return view('login');
    }

    public function login(Request $request)
    {
        // Validate login credentials
        $request->validate([
            'name' => 'required', // Assuming you are using email for login
            'password' => 'required|string|min:8'
        ]);

        // Check credentials
        $credentials = $request->only('name', 'password'); // Use email, not username

        if (Auth::attempt($credentials)) {
            // Get the authenticated user
            $user = Auth::user();

            // Redirect based on user role
            if ($user->role === 'admin') {
                return redirect()->route('adminDashboard')->with('success', 'Selamat datang Admin');
            } elseif ($user->role === 'customer') {
                return redirect()->route('dashboardCustomer')->with('success', 'Login Berhasil, Selamat datang ' . $user->name . '!');
            }
        }

        // If authentication fails
        return back()->withErrors(['name' => 'Invalid credentials'])->withInput();
    }

    public function logout(Request $request)
    {
        Auth::logout(); // Log out the user
        $request->session()->invalidate(); // Invalidate the session
        $request->session()->regenerateToken(); // Regenerate session token for security
        return redirect()->route('login')->with('success', 'Logged out successfully.');
    }
}
