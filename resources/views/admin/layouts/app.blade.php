<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>@yield('title', 'Default Title')</title>
    @vite('resources/css/app.css')
    <link rel="icon" href="{{ asset('images/icon.png') }}">
</head>

</head>
<body>
    <div class="admin-dashboard">
        <nav class="px-[24px] py-[10px]  top-[0]  bg-[#fbfbfb] text-black sticky z-20">
            <div class="flex items-center justify-between ">
                <a class="" href=""><img class="h-[40px]" src="{{asset('images/navLogo.png')}}" alt="Logo GoMikro"></a>
                <div class="border-[2px] items-center w-[420px]  grid grid-cols-12 bg-white rounded-lg py-[5px] px-[5px]">
        
                    <div class="col-span-2   py-[5px] rounded-lg px-[5px]">
                        <img class="w-[20px]" src="{{asset('images/search.png')}}" alt="">
        
        
                    </div>
                    <div class="col-span-10 ">
                        <input class="w-full" type="search  " placeholder="Cari barang di GoMikro" name="" id="">
     
                    </div>
            
                </div>
                <div>
                    <ul class="flex gap-[5px]">
                        <div class="relative group">
                            <li>
                                @if (Auth::check())
                                    <!-- Logout Button -->
                                    <form action="{{ route('logout') }}" method="POST">
                                        @csrf
                                        <button type="submit" class="relative">
                                            <img class="h-[40px] w-[40px] group m-[5px] group-hover:hidden hover:bg-[#f0f3f7] hover:rounded-lg" src="{{asset('images/logout.png')}}" alt="Logout">
                                            <img class="h-[40px] w-[40px] hidden group-hover:block m-[5px] hover:bg-[#f0f3f7] hover:rounded-lg" src="{{asset('images/logoutRed.png')}}" alt="Logout">
                                        </button>
                                    </form>
        
                                @else
                                    <!-- Profile Button -->
        
                                @endif
        
                            </li>
                        </div>
                        <div>
                            @if (Auth::check())
                            <a href="/profile">
                                <img class="h-[40px] group m-[5px] group-hover:hidden hover:bg-[#f0f3f7] hover:rounded-lg" src="{{asset('images/Profile.png')}}" alt="Profile">
                            </a>
                            <a href="/profile">
                                <img class="h-[40px] hidden group-hover:block m-[5px] hover:bg-[#f0f3f7] hover:rounded-lg" src="{{asset('images/ProfileGreen.png')}}" alt="Profile Hover">
                            </a>
                            @else
                            <a href="/login">
                                <img class="h-[40px] group m-[5px] group-hover:hidden hover:bg-[#f0f3f7] hover:rounded-lg" src="{{asset('images/Profile.png')}}" alt="Profile">
                            </a>
                            <a href="/login">
                                <img class="h-[40px] hidden group-hover:block m-[5px] hover:bg-[#f0f3f7] hover:rounded-lg" src="{{asset('images/ProfileGreen.png')}}" alt="Profile Hover">
                            </a>
        
                            @endif
        
                        </div>
        
                    </ul>
                </div>       
            </div>
        </nav>        

        <!-- Sidebar -->
        <div class="admin-dashboard flex">
            <!-- Sidebar -->
            <aside id="sidebar" class="bg-[#fbfbfb] w-[230px] h-screen  fixed top-19 left-0 z-10">
                <div class="p-4">
                    <ul class="space-y-6 text-white">
                        <li class="group">
                            <a href="{{route('dashboardAdmin')}}" class="bg-[#02b18a] h-[35px] py-1 px-4 block rounded-md transition transform group-hover:translate-x-6 duration-300">
                                Dashboard
                            </a>
                        </li>
                        <li class="group">
                            <a href="{{route('admin.orders.index')}}" class="bg-[#02b18a] h-[35px] py-1 px-4 block rounded-md transition transform group-hover:translate-x-6 duration-300">
                                Daftar Pesanan
                            </a>
                        </li>
                        <li class="group">
                            <a href="/" class="bg-[#02b18a] h-[35px] py-1 px-4 block rounded-md transition transform group-hover:translate-x-6 duration-300">
                                Pasarkan Produk
                            </a>
                        </li>
                        <li class="group">
                            <a href="{{ route('admin.products.index') }}" class="bg-[#02b18a] h-[35px] py-1 px-4 block rounded-md transition transform group-hover:translate-x-6 duration-300">
                                Daftar Produk
                            </a>
                        </li>
                        <li class="group">
                            <a href="{{route('admin.categories.index')}}" class="bg-[#02b18a] h-[35px] py-1 px-4 block rounded-md transition transform group-hover:translate-x-6 duration-300">
                                Kategori Produk
                            </a>
                        </li>
                    </ul>
                </div>
                <div class="p-4">
                    <a href="{{ route('logout') }}" class="bg-[#02b18a] text-white rounded-full py-2 px-4 block text-center transform transition-transform hover:scale-110 duration-300">
                        Logout
                    </a>
                </div>
            </aside>
        
            <!-- Content -->
            <main class="flex-grow p-6 bg-white ml-[230px]">
                @yield('content')
            </main>
        </div>

    </div>
</body>
</html>