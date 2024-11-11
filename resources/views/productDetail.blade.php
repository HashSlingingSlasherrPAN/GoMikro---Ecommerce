@extends('components/template')
@section('title', 'Detail Produk')

@section('content')
<div class="mx-[50px]  my-[80px] ">
    <div class="grid grid-cols-12">
        <div class="col-span-4">
            <div class="">
                <img class="w-[800px] h-[500px] object-cover" src="images/dummyP.jpg" alt="">

            </div>




        </div>
        <div class="col-span-5 mx-[40px]">
            <div class="grid gap-[20px]">
                <h1 class="font-[500] text-[1.8rem] pb-[20px]  border-b-[1px] border-[#e5e5e5]">Judul Product </h1>
                <p class="font-[400] border-b-[1px] pb-[20px] border-[#e5e5e5] opacity-[70%] text-[1rem]">
                    Kategori: Makanan <br>
                    Warna : Biru <br>
                    Kondisi: Baru <br>
                    Min. Pemesanan: 1 Buah <br>
                    Etalase: Strap Apple Watch Iwo <br>
                    New Titanium Color <br>

                    Tali Strap Rantai Stainless Steel Premium Apple Watch iWatch ukuran 38 / 40 / 41 / 42 / 44 / 45 / 49MM cocok untuk Apple Watch Seri 3 4 5 6 7 8 Ultra SE atau iwo watch

                    Bonus Alat Pemotong Rantai
                    *Selama Persediaan Masih Ada
                </p>
                <p class="font-[700] text-[1.6rem]">Rp. 999</p>

            </div>
        </div>
        <div class="col-span-3 ">

            <div class="grid mx-[32px] my-[40px] py-[40px] rounded-lg border border-[#e5e5e5] px-[20px] grid-cols-3">
                <div class="col-span-3 ">
                    <div class="grid mb-[32px] grid-cols-3">
                        <div class="col-span-1">
                            <p class="font-[400]">Jumlah :</p>
                        </div>
                        <div class="col-span-1">

                        </div>
                        <div class="col-span-1">
                            <form class="">
                                <div class=" flex items-center justify-center align-center max-w-[8rem]">
                                    <button type="button" id="decrement-button" data-input-counter-decrement="quantity-input" class="bg-gray-100 dark:bg-gray-700 dark:hover:bg-gray-600 dark:border-gray-600 hover:bg-gray-200 border border-gray-300 rounded-s-lg p-3 h-11 focus:ring-gray-100 dark:focus:ring-gray-700 focus:ring-2 focus:outline-none">
                                        <svg class="w-3 h-3 text-gray-900 dark:text-white" aria-hidden="true" xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 18 2">
                                            <path stroke="currentColor" stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M1 1h16"/>
                                        </svg>
                                    </button>
                                    <input type="text" id="quantity-input" data-input-counter aria-describedby="helper-text-explanation" class="bg-gray-50 border-x-0 border-gray-300 h-11 text-center text-gray-900 text-sm focus:ring-blue-500 focus:border-blue-500 block w-full py-2.5 dark:bg-gray-700 dark:border-gray-600 dark:placeholder-gray-400 dark:text-white dark:focus:ring-blue-500 dark:focus:border-blue-500" placeholder="999" required />
                                    <button type="button" id="increment-button" data-input-counter-increment="quantity-input" class="bg-gray-100 dark:bg-gray-700 dark:hover:bg-gray-600 dark:border-gray-600 hover:bg-gray-200 border border-gray-300 rounded-e-lg p-3 h-11 focus:ring-gray-100 dark:focus:ring-gray-700 focus:ring-2 focus:outline-none">
                                        <svg class="w-3 h-3 text-gray-900 dark:text-white" aria-hidden="true" xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 18 18">
                                            <path stroke="currentColor" stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M9 1v16M1 9h16"/>
                                        </svg>
                                    </button>
                                </div>
                            </form>
                        </div>

                    </div>
                    <a href=""><h1 class="font-[700] hover:bg-[#00AC73] my-[12px] text-[1.3rem] block w-full text-center text-white bg-[#02B18A] rounded-sm py-[10px]">Masukan Keranjang</h1></a>

                </div>


            </div>


        </div>
        <div class="col-span-1">

        </div>
    </div>

</div>
@endsection
