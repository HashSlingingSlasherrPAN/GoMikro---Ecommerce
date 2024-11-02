<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Document</title>
    <title>@yield('name')</title>
    @vite('resources/css/app.css')
    <link rel="icon" href="images/icon.png">



</head>
<body class="bg-[#fbfbfb]">
    @if(request()->is('login'))
    @elseif(request()->is('/'))
            @include('components.navbar')
            @include('components/footer')
    @elseif (request()->is('registerCustomer'))
    @endif
    @yield('content')


</body>
</html>
