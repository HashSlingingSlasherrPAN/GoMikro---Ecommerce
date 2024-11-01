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
    @include('components/navbar')

    @yield('content')
    @include('components/footer')

</body>
</html>
