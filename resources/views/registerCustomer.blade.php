@extends('components/template')
@section('title','registerCustomer')


@section('content')
<div class="   text-black">

    <div class="grid grid-cols-2">


        <div class="col-span-1 bg-[#e8f7f4] rounded-3xl overflow-hidden  "">
            <div class="overflow-hidden">
                <img class="rounded-3xl" src="images/registerCustomer.png" alt="">

            </div>


        </div>
        <div class="col-span-1">
            <div class="col-span-1">
                <div class="grid grid-cols-8">
                    <div class="col-span-1">

                    </div>
                    <div class="col-span-6 grid  gap-[24px]">
                         <img class="w-[200px]  pt-[52px] " src="images/navLogo.png" alt="">




                         <form class="grid gap-[8px]" action="{{ route('create') }}" method="POST">
                            @csrf
                            <div>
                                <label class="text-gray-900" for="name">Username :</label><br>
                                <input class="border  border-gray-300   focus:outline-none focus:ring-[1px]  focus:ring-[#02B18A]  my-[4px] rounded-md w-full bg-gray-50 py-[8px] px-[8px] " required type="text" name="name" id="name" value="{{ Session::get('name') }}" placeholder="Masukan username">
                            </div>
                            <div>
                                <label class="text-gray-900" for="email">Email :</label><br>
                                <input class="border  border-gray-300   focus:outline-none focus:ring-[1px]  focus:ring-[#02B18A]  my-[4px] rounded-md w-full bg-gray-50 py-[8px] px-[8px] " required type="text" value="{{ Session::get('email') }}" name="email" id="email" placeholder="Masukan Email">
                            </div>
                            <div>
                                <label class="text-gray-900"  for="password">Password :</label><br>
                                <input class="border  border-gray-300  focus:outline-none focus:ring-[1px] focus:ring-[#02B18A]  my-[4px] rounded-md w-full bg-gray-50 py-[8px] px-[8px]" type="text" name="password" id="password"  placeholder="Masukan Password">
                            </div>
                            <p class="text-gray-400">belum punya akun? <a class="font-[500] text-[#00AC73] hover:text-[#19b894] text-[1rem]" href="/register">daftar</a></p>
                            <div>
                                <button name="submit" type="submit" class="rounded-md shadow-[#02B18A] shadow-[0_3px_10px_rgb(0,0,0,0.2)] bg-[#02B18A] hover:bg-[#00AC73] font-[500] text-[1.3rem] px-[8px] my-[16px] py-[12px] text-white text-center block w-full">
                                    Register
                                </button>
                            </div>
                            <div>

                            </div>
                        </form>




                    </div>
                    <div class="col-span-1">

                    </div>

                </div>


            </div>
        </div>


    </div>

</div>
@endsection

