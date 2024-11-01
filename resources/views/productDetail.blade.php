@extends('components/template')
@section('title', 'productDetail')

@section('content')
<div class="mx-[50px]  my-[80px] ">
    <div class="grid grid-cols-12">
        <div class="col-span-8">
            <div class="">
                <img class="w-[800px] h-[500px] object-cover" src="images/dummyP.jpg" alt="">

            </div>




        </div>
        <div class="col-span-4 ">
            <div class="grid gap-[20px]">
                <h1 class="font-[400] text-[1.5rem]">Judul Product | nama | deskripsi singkat</h1>
                <p class="font-[400] opacity-[70%] text-[1rem]">Lorem ipsum dolor sit amet consectetur adipisicing elit. </p>
                <p class="font-[500] text-[1.6rem]">Rp. 999</p>

            </div>
            <div class="grid grid-cols-2">
                <div class="col-span-1 ">
                    <a href=""><h1 class="font-[700] my-[100px] text-[1.3rem] text-center text-white bg-black rounded-sm py-[10px]">Masukan Keranjang</h1></a>

                </div>
                <div class="col-span-1">

                </div>

            </div>


        </div>
    </div>

</div>
@endsection
