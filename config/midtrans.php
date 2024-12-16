<?php

use Midtrans\Config;
return [
    'server_key' => env('MIDTRANS_SERVER_KEY'),
    'is_production' => env('MIDTRANS_IS_PRODUCTION'),
    'is_sanitized' => env('MIDTRANS_IS_SANITIZED'),
    'is_3ds' => env('MIDTRANS_IS_3DS'),
    'client_key' => env('MIDTRANS_CLIENT_KEY')

];
?>
