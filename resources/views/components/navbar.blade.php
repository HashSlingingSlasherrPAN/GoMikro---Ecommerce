<nav class="px-[24px] py-[10px] z-index-999   top-[0]  bg-[#fbfbfb] sticky ">
    <div class="flex items-center justify-between ">
        <a class="" href=""><img class="h-[40px]" src="{{ asset('images/navLogo.png') }}" alt="Logo GoMikro"></a>
        <div class="border-[2px] items-center w-[420px]  grid grid-cols-12 bg-white rounded-lg py-[5px] px-[5px]">

            <div class="col-span-2   py-[5px] rounded-lg px-[5px]">
                <img class="w-[20px]" src="{{ asset('images/search.png') }}" alt="">


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
                                    <img class="h-[40px] w-[40px] group m-[5px] group-hover:hidden hover:bg-[#f0f3f7] hover:rounded-lg" src=" {{asset('images/logout.png')}}" alt="Logout">
                                    <img class="h-[40px] w-[40px] hidden group-hover:block m-[5px] hover:bg-[#f0f3f7] hover:rounded-lg" src="{{ asset('images/logoutRed.png') }}" alt="Logout">
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
                        <img class="h-[40px] group m-[5px] group-hover:hidden hover:bg-[#f0f3f7] hover:rounded-lg" src="{{ asset('images/Profile.png') }}" alt="Profile">
                    </a>
                    <a href="/profile">
                        <img class="h-[40px] hidden group-hover:block m-[5px] hover:bg-[#f0f3f7] hover:rounded-lg" src="{{ asset('images/ProfileGreen.png') }}" alt="Profile Hover">
                    </a>
                    @else
                    <a href="/login">
                        <img class="h-[40px] group m-[5px] group-hover:hidden hover:bg-[#f0f3f7] hover:rounded-lg" src="{{ asset('images/Profile.png') }}" alt="Profile">
                    </a>
                    <a href="/login">
                        <img class="h-[40px] hidden group-hover:block m-[5px] hover:bg-[#f0f3f7] hover:rounded-lg" src="{{ asset('images/ProfileGreen.png') }}" alt="Profile Hover">
                    </a>

                    @endif

                </div>

                <div class="relative group">
                    <li><a href=""><img class="h-[40px] group m-[5px] group-hover:hidden hover:bg-[#f0f3f7] hover:rounded-lg" src="{{ asset('images/cart.png') }}" alt=""></a>
                        <a href="/cart"><img class="h-[40px] hidden group-hover:block m-[5px] hover:bg-[#f0f3f7] hover:rounded-lg" src="{{ asset('images/cartGreen.png') }}" alt=""></a>
                    </li>
                </div>

            </ul>
        </div>



    </div>
</nav>
