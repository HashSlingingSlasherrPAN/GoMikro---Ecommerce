<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>GoMikro</title>
    <title>@yield('name')</title>
    @vite('resources/css/app.css')
    <link rel="icon" href="images/icon.png">



</head>
<body class="">
    @if(request()->is('login'))
    @elseif(request()->is('/'))
            @include('components.navbar')
            @include('components/footer')
    @elseif (request()->is('registerCustomer'))
    @elseif (request()->is('dashboardAdmin'))
            @include('components.navbarMerchant')
            @include('components/sidebar')
            @include('components/footer')
    @elseif (request()->is('pesananBaru'))
        @include('components.navbarMerchant')
        @yield('content')
        @include('components/sidebar')

        @include('components/footer')
    @endif
    @yield('content')


</body>
</html>
