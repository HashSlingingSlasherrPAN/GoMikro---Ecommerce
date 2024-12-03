<?php

namespace App\Providers;

use Illuminate\Support\ServiceProvider;
use Illuminate\Support\Facades\Route;
use App\Http\Middleware\RoleMiddleware;
class AppServiceProvider extends ServiceProvider
{
   /**
     * Configure the application's route middleware.
     */
    public function configureMiddleware(): void
    {
        Route::middleware('role', RoleMiddleware::class);
    }
}
