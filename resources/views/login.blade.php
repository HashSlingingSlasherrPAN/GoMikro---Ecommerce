@extends('components/template')
@section('title', 'Gomikro login')

@section('content')
<div class="mx-[50px] my-[20px] bg-transparent text-black">
    <div class="flex items-center justify-center">
        <img class="w-[200px]" src="{{ asset('images/navLogo.png') }}" alt="Logo">
    </div>

    @if(session('status'))
        <div class="text-center text-green-600 font-medium mb-4">
            {{ session('status') }}
        </div>
    @endif

    @if($errors->any())
        <div class="text-center text-red-600 font-medium mb-4">
            <ul>
                @foreach ($errors->all() as $error)
                    <li>{{ $error }}</li>
                @endforeach
            </ul>
        </div>
    @endif

    <div class="grid grid-cols-2">
        <div class="col-span-1">
            <div class="grid grid-cols-8">
                <div class="col-span-1"></div>
                <div class="col-span-1"></div>
                <div class="col-span-6 py-[140px]">
                    <img class="relative items-center justify-center align-center" src="{{ asset('images/poster1.png') }}" alt="Poster">
                </div>
            </div>
        </div>
        <div class="col-span-1">
            <div class="grid grid-cols-8">
                <div class="col-span-2"></div>
                <div class="col-span-4">
                    <div class="py-[40px] text-[1rem] font-[400]  grid gap-[12px]   px-[40px] rounded-lg shadow-[0_3px_10px_rgb(0,0,0,0.2)] my-[100px]">
                        <form class="grid gap-[8px]" action="{{ route('login') }}" method="POST">
                            @csrf
                            {{-- <div>
                                <label class="text-gray-900" for="name">Username :</label><br>
                                <input class="border  border-gray-300   focus:outline-none focus:ring-[1px]  focus:ring-[#02B18A]  my-[4px] rounded-md w-full bg-gray-50 py-[8px] px-[8px] " required type="text" name="name" id="name" placeholder="Masukan username">
<<<<<<< HEAD
                            </div>
                          
=======
                            </div> --}}
                            <div>
                                <label class="text-gray-900" for="email">Email :</label><br>
                                <input class="border  border-gray-300   focus:outline-none focus:ring-[1px]  focus:ring-[#02B18A]  my-[4px] rounded-md w-full bg-gray-50 py-[8px] px-[8px] " required type="text" value="{{ Session::get('email') }}" name="email" id="email" placeholder="Masukan Email">
                            </div>
>>>>>>> fce8b58a19512971e6eae223c7be3327743ff254
                            <div>
                                <label class="text-gray-900"  for="password">Password :</label><br>
                                <input class="border  border-gray-300  focus:outline-none focus:ring-[1px] focus:ring-[#02B18A]  my-[4px] rounded-md w-full bg-gray-50 py-[8px] px-[8px]" type="password" name="password" id="password"  placeholder="Masukan Password">
                            </div>
                            <p class="text-gray-400">belum punya akun? <a class="font-[500] text-[#00AC73] hover:text-[#19b894] text-[1rem]" href="/register">daftar</a></p>
                            <div>
                                <button name="submit" type="submit" class="rounded-md shadow-[#02B18A] shadow-[0_3px_10px_rgb(0,0,0,0.2)] bg-[#02B18A] hover:bg-[#00AC73] font-[500] text-[1.3rem] px-[8px] my-[16px] py-[12px] text-white text-center block w-full">
                                    Login
                                </button>
                            </div>
                            <div>

                            </div>
                        </form>


                    </div>

                </div>
                <div class="col-span-2"></div>
            </div>
        </div>
    </div>
</div>
@endsection
