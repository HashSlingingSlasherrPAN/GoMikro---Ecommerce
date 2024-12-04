<?php

namespace App\Http\Middleware;

use Closure;
use Illuminate\Http\Request;
use Symfony\Component\HttpFoundation\Response;
use Illuminate\Support\Facades\Auth;

class isGuest
{
    /**
     * Handle an incoming request.
     *
     * @param  \Closure(\Illuminate\Http\Request): (\Symfony\Component\HttpFoundation\Response)  $next
     */
    public function handle(Request $request, Closure $next): Response
    {
        if (Auth::check()) {
            // Arahkan berdasarkan role pengguna
            if (Auth::user()->role === 'admin') {
                return redirect()->route('dashboardAdmin')->with('info', 'Anda sudah login sebagai Admin.');
            } elseif (Auth::user()->role === 'customer') {
                return redirect()->route('dashboardCustomer')->with('info', 'Anda sudah login sebagai Customer.');
            }
        }

        return $next($request);
    }
}
