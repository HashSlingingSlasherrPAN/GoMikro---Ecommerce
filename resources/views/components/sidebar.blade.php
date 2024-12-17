<aside id="sidebar" class="bg-[#fbfbfb] w-[230px] h-[657px] relative flex flex-col justify-between items-start p-4 transition-all duration-300 ease-in-out">
    <div class="flex items-start w-full relative top-3">
        <ul class="space-y-6 text-white w-[180px]">
            <!-- Link Pesanan Baru -->
            <li class="group">
                <a href="{{ route('pesananBaru') }}" class="bg-[#02b18a] h-[35px] py-1 px-4 w-full block transition ease-in-out transform group-hover:translate-x-6 duration-300 rounded-md">
                    Pesanan Baru
                </a>
            </li>
            <!-- Link Pasarkan Produk -->
            <li class="group">
                <a href="{{ route('pasarkanProduk') }}" class="bg-[#02b18a] h-[35px] py-1 px-4 w-full block transition ease-in-out transform group-hover:translate-x-6 duration-300 rounded-md">
                    Pasarkan Produk
                </a>
            </li>
            <!-- Link List Produk -->
            <li class="group">
                <a href="{{ route('listProduk') }}" class="bg-[#02b18a] h-[35px] py-1 px-4 w-full block transition ease-in-out transform group-hover:translate-x-6 duration-300 rounded-md">
                    List Produk
                </a>
            </li>
        </ul>
    </div>

    <div class="w-full flex justify-center relative bottom-2">
        <a href="{{ route('login') }}" class="bg-[#02b18a] text-white rounded-full py-2 px-4 w-[190px] text-center transform hover:scale-110 transition duration-300">Logout</a>
    </div>
</aside>
