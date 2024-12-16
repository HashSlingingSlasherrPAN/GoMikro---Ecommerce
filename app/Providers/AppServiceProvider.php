<?php

namespace App\Providers;
use Midtrans\Config;
use Illuminate\Support\ServiceProvider;
use Illuminate\Support\Facades\Route;
class AppServiceProvider extends ServiceProvider
{
   /**
     * Configure the application's route middleware.
     */
    public function configureMiddleware(): void
    {
    }
    public function boot()
{
    Config::$serverKey = env('MIDTRANS_SERVER_KEY');
    Config::$clientKey = env('MIDTRANS_CLIENT_KEY');
    Config::$isProduction = env('MIDTRANS_IS_PRODUCTION', false); // `false` for sandbox
    Config::$isSanitized = env('MIDTRANS_IS_SANITIZED', true);
    Config::$is3ds = env('MIDTRANS_IS_3DS', true);
}
}
