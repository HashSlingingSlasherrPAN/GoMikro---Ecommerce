<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>@yield('title', 'Default Title')</title>
    @vite('resources/css/app.css')
    <link rel="icon" href="{{ asset('images/icon.png')  }}">
    <link rel="stylesheet" href="https://unpkg.com/swiper/swiper-bundle.min.css"/>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/sweetalert/2.1.2/sweetalert.min.js" integrity="sha512-AA1Bzp5Q0K1KanKKmvN/4d3IRKVlv9PYgwFPvm32nPO6QS8yH1HO7LbgB1pgiOxPtfeg5zEn2ba64MUcqJx6CA==" crossorigin="anonymous" referrerpolicy="no-referrer"></script>
    <script src="https://app.sandbox.midtrans.com/snap/snap.js" data-client-key="<Set your ClientKey here>"></script>


        @yield('script')

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

        @if (request()->is('customer/dashboardCustomer'))
        @include('components.navbar')
        @include('components.banner')
        @elseif(request()->is('mycart'))
        @include('components.navbar')
        @include('components.cartnav')
        @elseif(request()->is('dashboardAdmin'))
        @include('components.navbar')
        @elseif (request()->is('productDetail/*'))
        @include('components.navbar')
        @elseif (request()->is('checkout'))
        @include('components.navbar')
        @include('components.checkoutNav')
        @elseif (request()->is('search'))
        @include('components.navbar')



        @endif
    @else
        @if (request()->is('/'))
        @include('components.loginSuggestion')
        @include('components.navbar')
        @include('components.banner')

        @elseif (request()->is('cart'))
        @include('components.navbar')
        @include('components.cartnav')



        @elseif (request()->is('productDetail'))
        @include('components.navbar')




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
    <script src="https://unpkg.com/swiper/swiper-bundle.min.js"></script>


</body>

<script>
    window.onload = function () {
            const swiper = new Swiper('.swiper-container', {
                slidesPerView: 1,
                spaceBetween: 30,
                navigation: {
                    nextEl: '.swiper-button-next',
                    prevEl: '.swiper-button-prev',
                },
                autoplay: {
                    delay: 5000,
                },
                loop: true,
                pagination: {
                    el: '.swiper-pagination', // Target the pagination container
                    clickable: true,         // Allow clicking on the dots
                    type: 'bullets',         // Use dots (default is 'bullets')
                },
            });
        };


</script>

</html>
