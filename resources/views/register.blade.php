@extends('components/template')
@section('title','register')


@section('content')
<div class="   text-black">

    <div class="grid grid-cols-2">
        <div class="col-span-1 bg-[#e8f7f4] rounded-3xl overflow-hidden  "">
            <div class="overflow-hidden">
                <img class="rounded-3xl" src="images/registerPoster.png" alt="">

            </div>


        </div>

        <div class="col-span-1">
            <div class="col-span-1">
                <div class="grid grid-cols-8">
                    <div class="col-span-1">

                    </div>
                    <div class="col-span-6 grid  gap-[24px]">
                         <img class="w-[200px]  pt-[52px] " src="images/navLogo.png" alt="">

                         <div class="pt-[40px]">

                            <div class="grid gap-[12px] px-[4px] py-[32px]">
                                <h1 class="font-[600] text-[1.8rem]">Register sebagai?</h1>
                                <p class="text-gray-500 text-[1.1rem]">mulai register GoMikro sebagai </p>
                            </div>
                           <div class="grid gap-[24px]">
                                <a href="/registerMerchant">
                                    <div class="border-[1px] relative group shadow-sm hover:ring-[#8D0171] hover:ring-[1px]  grid  grid-cols-6 px-[16px] py-[12px]  border-gray-300  rounded-xl">

                                        <div class="col-span-5">
                                            <h1 class=" text-[#8D0171]  font-[500] text-[1.3rem]">Register Sebagai Seller</h1>
                                            <p class="pt-[4px] text-gray-500">saya ingin memperluas bisnis dan mulai berjualan dengan GoMikro</p>

                                        </div>

                                        <div class="col-span-1  flex items-center justify-center">
                                            <img class="h-[40px] group-hover:hidden" src="images/merchant.png" alt="">

                                            <img class="hidden h-[40px] group-hover:block" src="images/nextPink.png" alt="">
                                        </div>



                                    </div>
                                </a>
                                <a href="/registerCustomer">
                                    <div class="border-[1px] relative group shadow-sm hover:ring-[#004A39] hover:ring-[1px]  grid  grid-cols-6 px-[16px] py-[12px]  border-gray-300  rounded-xl">

                                        <div class="col-span-5">
                                            <h1 class=" text-[#004A39]  font-[500] text-[1.3rem]">Register Sebagai Customer</h1>
                                            <p class="pt-[4px] text-gray-500">saya ingin menemukan produk-produk unik dan berkualitas dari UMKM lokal.</p>

                                        </div>

                                        <div class="col-span-1 flex items-center justify-center">
                                            <img class="h-[40px] group-hover:hidden" src="images/customer.png" alt="">
                                            <img class="h-[40px] hidden group-hover:block " src="images/nextGreen.png" alt="">

                                        </div>



                                    </div>
                                </a>
                           </div>




                         </div>




                    </div>
                    <div class="col-span-1">

                    </div>

                </div>


            </div>
        </div>



    </div>

</div>
@endsection

