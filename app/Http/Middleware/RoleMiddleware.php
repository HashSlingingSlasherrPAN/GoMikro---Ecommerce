<?php
namespace App\Http\Middleware;

use Closure;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Route;
use App\Models\User;
use App\Models\Role;

class RoleMiddleware
{
    public function handle(Request $request, Closure $next, $role)
    {
        // Skip public routes
        $publicRoutes = ['login', 'register', 'home']; // Add more routes as needed
        $currentRoute = optional($request->route())->getName();

        if (in_array($currentRoute, $publicRoutes)) {
            return $next($request);
        }

        // Skip invalid or static file requests
        if ($currentRoute === null) {
            return $next($request);
        }

        // Check if user is authenticated
        if (Auth::check()) {
            if (Auth::user()->role === $role) {
                return $next($request);  // User has the correct role
            }

            // Redirect if the user does not have the correct role
            return redirect()->route('login')->withErrors(['access' => 'Unauthorized access']);
        }

        // Redirect unauthenticated users
        return redirect()->route('login');
    }
}
