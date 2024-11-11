@extends('components.template')
@section('title', 'Keranjang Belanja Anda')

@section('content')
<div class="mx-[90px]   text-black">
    <div class="grid grid-cols-8 border-b-[1px] border-[#e5e5e5] pb-[80px] pt-[24px] items-center relative   ">
        <div class="col-span-1">
            <a href="">
                <div class="grid grid-cols-2">
                    <div class="col-span-1">
                        <img class="w-[80px] h-[80px] object-cover" src="images/dummyP.jpg" alt="">

                    </div>
                    <div class="col-span-1 text-[0.9rem] font-[400]">
                        <h1>Nama Produk</h1>
                        <p>Tipe Produk</p>

                    </div>

                </div>
            </a>

        </div>
        <div class="col-span-5 relative">
            <div class="grid grid-cols-8">
                <div class="col-span-5">

                </div>
                <div class="col-span-3">
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


        </div>
        <div class="col-span-1">
            <p>Rp. 999</p>


        </div>
        <div class="col-span-1">
            <div class="grid-cols-2 grid">
                <div class="col-span-1  text-center">
                    <a href=""><p class="font-[400]  hover:bg-[#f0f3f7] hover:text-[#00AC73]  hover:rounded-lg underline text-[1.2rem]">Hapus</p>
                    </a>
                </div>
                <div class="col-span-1">

                </div>

            </div>


        </div>

    </div>
    <div class="grid grid-cols-8 border-b-[1px] border-[#e5e5e5] pb-[80px] pt-[24px] items-center relative   ">
        <div class="col-span-1">
            <a href="">
                <div class="grid grid-cols-2">
                    <div class="col-span-1">
                        <img class="w-[80px] h-[80px] object-cover" src="images/dummyP.jpg" alt="">

                    </div>
                    <div class="col-span-1 text-[0.9rem] font-[400]">
                        <h1>Nama Produk</h1>
                        <p>Tipe Produk</p>

                    </div>

                </div>
            </a>

        </div>
        <div class="col-span-5 relative">
            <div class="grid grid-cols-8">
                <div class="col-span-5">

                </div>
                <div class="col-span-3">
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


        </div>
        <div class="col-span-1">
            <p>Rp. 999</p>


        </div>
        <div class="col-span-1">
            <div class="grid-cols-2 grid">
                <div class="col-span-1  text-center">
                    <a href=""><p class="font-[400]  hover:bg-[#f0f3f7] hover:text-[#00AC73]  hover:rounded-lg underline text-[1.2rem]">Hapus</p>
                    </a>
                </div>
                <div class="col-span-1">

                </div>

            </div>


        </div>

    </div>
    <div class="grid grid-cols-8 border-b-[1px] border-[#e5e5e5] pb-[80px] pt-[24px] items-center relative   ">
        <div class="col-span-1">
            <a href="">
                <div class="grid grid-cols-2">
                    <div class="col-span-1">
                        <img class="w-[80px] h-[80px] object-cover" src="images/dummyP.jpg" alt="">

                    </div>
                    <div class="col-span-1 text-[0.9rem] font-[400]">
                        <h1>Nama Produk</h1>
                        <p>Tipe Produk</p>

                    </div>

                </div>
            </a>

        </div>
        <div class="col-span-5 relative">
            <div class="grid grid-cols-8">
                <div class="col-span-5">

                </div>
                <div class="col-span-3">
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


        </div>
        <div class="col-span-1">
            <p>Rp. 999</p>


        </div>
        <div class="col-span-1">
            <div class="grid-cols-2 grid">
                <div class="col-span-1  text-center">
                    <a href=""><p class="font-[400]  hover:bg-[#f0f3f7] hover:text-[#00AC73]  hover:rounded-lg underline text-[1.2rem]">Hapus</p>
                    </a>
                </div>
                <div class="col-span-1">

                </div>

            </div>


        </div>

    </div>






</div>
@endsection
