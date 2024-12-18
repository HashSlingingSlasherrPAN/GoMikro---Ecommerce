

<div class="mx-[90px] border-b-[1px] mt-[40px] border-[#e5e5e5] pb-[32px] my-[32px]  ">
    <div class="flex justify-between">
        <h1 class="font-[500] my-[32px] text-[1.8rem] ">Keranjang Belanja Anda</h1>
        <div class=" relative group top-[16px]">
            <a href="">
                <img class="h-[48px] group m-[5px] group-hover:hidden hover:bg-[#f0f3f7] hover:rounded-lg" src="{{ asset('images/history.png') }}" alt="Profile">
            </a>
            <a href="{{ url('history') }}">
                <img class="h-[48px] hidden group-hover:block m-[5px] hover:bg-[#f0f3f7] hover:rounded-lg" src="{{ asset('images/historyGreen.png') }}" alt="Profile Hover">
            </a>
        </div>

    </div>
    <div class="grid-cols-10 text-[#484b4e]    grid max-h-[24px]">
        <div class="col-span-2">
            <h1 class="font-[600]">Produk</h1>
        </div>
        <div class="col-span-4 text-center">
            <div class="grid grid-cols-4">
                <div class="col-span-2">

                </div>
                <div class="col-span-1">

                </div>
                <div class="col-span-1">

                </div>
            </div>
        </div>
        <div class="col-span-2">
            <h1 class="font-[500]">Subtotal Harga</h1>

        </div>
        <div class="col-span-1">

        </div>
        <div class="col-span-1">
            <h1 class="font-[500]">Hapus</h1>

        </div>


    </div>
</div>

