@extends('components/template')

@section('title', 'GoMikro Profile')

@section('content')
<div class="mx-[90px]">
    <h1 class="font-[500] my-[32px] text-[1.8rem] ">Profil Anda</h1>
    <div class="grid grid-cols-3 ">
        <div class="col-span-1">
            <!-- Anda bisa menambahkan gambar avatar user di sini -->
        </div>
        <div class="col-span-1">
            <div>
                <label class="text-gray-900" for="name">Name :</label><br>
                <input class="border border-gray-300 focus:outline-none focus:ring-[1px] focus:ring-[#02B18A] my-[4px] rounded-md w-full bg-gray-50 py-[8px] px-[8px]" 
                    type="text" name="name" id="name" value="{{ Auth::user()->name }}" readonly>
            </div>
            <div>
                <label class="text-gray-900" for="email">Email :</label><br>
                <input class="border border-gray-300 focus:outline-none focus:ring-[1px] focus:ring-[#02B18A] my-[4px] rounded-md w-full bg-gray-50 py-[8px] px-[8px]" 
                    type="text" name="email" id="email" value="{{ Auth::user()->email }}" readonly>
            </div>
            <div>
                <label class="text-gray-900" for="address">Address :</label><br>
                <input class="border border-gray-300 focus:outline-none focus:ring-[1px] focus:ring-[#02B18A] my-[4px] rounded-md w-full bg-gray-50 py-[8px] px-[8px]" 
                    type="text" name="address" id="address" value="{{ Auth::user()->address }}" readonly>
            </div>
            <div>
                <label class="text-gray-900" for="phone">Phone :</label><br>
                <input class="border border-gray-300 focus:outline-none focus:ring-[1px] focus:ring-[#02B18A] my-[4px] rounded-md w-full bg-gray-50 py-[8px] px-[8px]" 
                    type="text" name="phone" id="phone" value="{{ Auth::user()->phone }}" readonly>
            </div>
            <div>
                <label class="text-gray-900" for="role">Role :</label><br>
                <input class="border border-gray-300 focus:outline-none focus:ring-[1px] focus:ring-[#02B18A] my-[4px] rounded-md w-full bg-gray-50 py-[8px] px-[8px]" 
                    type="text" name="role" id="role" value="{{ Auth::user()->role }}" readonly>
            </div>
        </div>
        <div class="col-span-1">
            <!-- Anda bisa menambahkan informasi tambahan atau elemen lainnya -->
        </div>
    </div>
</div>
@endsection
