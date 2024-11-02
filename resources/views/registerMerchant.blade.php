@extends('components/template')
@section('title','registerCustomer')


@section('content')
<div class="   text-black">

    <div class="grid grid-cols-2">


        <div class="col-span-1 bg-[#e8f7f4] rounded-3xl overflow-hidden  "">
            <div class="overflow-hidden">
                <img class="rounded-3xl" src="images/registerMerchant.png" alt="">

            </div>


        </div>
        <div class="col-span-1">
            <div class="col-span-1">
                <div class="grid grid-cols-8">
                    <div class="col-span-1">

                    </div>
                    <div class="col-span-6 grid  gap-[24px]">
                         <img class="w-[200px]  pt-[52px] " src="images/navLogo.png" alt="">




                         <div class="py-[40px] text-[1rem] font-[400]  grid gap-[16px]   px-[40px] rounded-lg shadow-[0_3px_10px_rgb(0,0,0,0.2)] my-[100px]">
                            <div>
                                <label class="text-gray-900" for="name">Username :</label><br>
                                <input class="border  border-gray-300   focus:outline-none focus:ring-[1px]  focus:ring-[#02B18A]  my-[4px] rounded-md w-full bg-gray-50 py-[8px] px-[8px] " required type="text" name="name" id="name" placeholder="Masukan username">
                            </div>
                            <div>
                                <label class="text-gray-900"  for="">Password :</label><br>
                                <input class="border  border-gray-300  focus:outline-none focus:ring-[1px] focus:ring-[#02B18A]  my-[4px] rounded-md w-full bg-gray-50 py-[8px] px-[8px]" type="text" name="password" id="password"  placeholder="Masukan Password">
                            </div>
                            <p class="text-gray-400">belum punya akun? <a class="font-[500] text-[#00AC73] hover:text-[#19b894] text-[1rem]" href="/register">daftar</a></p>
                            <div>
                                <a class="rounded-md bg-[#02B18A] hover:bg-[#00AC73] font-[500] text-[1.3rem] px-[8px] my-[16px] py-[12px] text-white text-center block"  href="">Login</a>
                            </div>
                            <div>

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

