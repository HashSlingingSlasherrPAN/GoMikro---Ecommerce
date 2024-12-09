<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>@yield('title', 'Default Title')</title>
    @vite('resources/css/app.css')
    <link rel="icon" href="images/icon.png">



</head>
{{-- <body class="">
    @if(request()->is('login'))
    @elseif(request()->is('/'))
            @include('components.navbar')
            @include('components/footer')
    @elseif (request()->is('registerCustomer'))
    @elseif (request()->is('dashboardMerchant'))
            @include('components.navbar')
            @include('components/footer') --}}

{{-- NOPAN TOLOGN BERIKAN PENJELASAN YANG MANA --}}

<body class="bg-[#fbfbfb]">
    @include('shared.errorMessage')
    @include('shared.successMessage')
    @if (Auth::check())

        @if (request()->is('admin/customer'))
        @include('components.navbar')
        @elseif(request()->is('cart'))
        @include('components.navbar')
        @include('components.cartnav')
        @elseif(request()->is('dashboardAdmin'))
        @include('components.navbar')



        @endif
    @else
        @if (request()->is('cart'))
        @include('components.navbar')
        @include('components.cartnav')

        @elseif (request()->is('session'))

        @include('components.navbar')
        @elseif(request()->is('dashboardCustomer'))
        @include('components.loginSuggestion')


        @endif


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
