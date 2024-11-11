<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
<<<<<<< HEAD
    <title>GoMikro</title>
    <title>@yield('name')</title>
=======
    <title>@yield('title', 'Default Title')</title>
>>>>>>> 5d01a381b805797e62b87e0f15d768a57fa16144
    @vite('resources/css/app.css')
    <link rel="icon" href="images/icon.png">
        


</head>
<<<<<<< HEAD
<body class="">
    @if(request()->is('login'))
    @elseif(request()->is('/'))
            @include('components.navbar')
            @include('components/footer')
    @elseif (request()->is('registerCustomer'))
    @elseif (request()->is('dashboardMerchant'))
            @include('components.navbar')
            @include('components/footer')
=======
<body class="bg-[#fbfbfb]">
    @include('shared.errorMessage')
    @include('shared.successMessage')
    @if (Auth::check())

        @if (request()->is('session'))
        @include('components.navbar')
        @elseif(request()->is('cart'))
        @include('components.navbar')

        @include('components.cartnav')



        @endif

>>>>>>> 5d01a381b805797e62b87e0f15d768a57fa16144
    @endif

    @if(request()->is('login'))

    @elseif (request()->is('productDetail'))
      @include('components.navbar')


    @elseif(request()->is('dashboardCustomer'))
     @include('components.navbar')

    @endif

    @yield('content')

    @if(request()->is('dashboardMerchant'))
            @include('components/sidebar')
    @endif

</body>
</html>
