@extends('components/template')
@section('title','Register Customer')

@section('content')
<div class="text-black">

    <div class="grid grid-cols-2">

        <!-- Left Image Section -->
        <div class="col-span-1 bg-[#e8f7f4] rounded-3xl overflow-hidden">
            <div class="overflow-hidden">
                <img class="rounded-3xl" src="{{ asset('images/registerCustomer.png') }}" alt="Register Customer">
            </div>
        </div>

        <!-- Right Form Section -->
        <div class="col-span-1">
            <div class="grid grid-cols-8">
                <div class="col-span-1"></div>
                <div class="col-span-6 grid gap-[24px]">
                    <!-- Logo -->
                    <img class="w-[200px] pt-[52px]" src="{{ asset('images/navLogo.png') }}" alt="Logo">

                    <!-- Registration Form -->
                    <form class="grid gap-[8px]" action="{{ route('register') }}" method="POST">
                        @csrf
                        <!-- Name -->
                        <div>
                            <label class="text-gray-900" for="name">Username:</label><br>
                            <input class="border border-gray-300 focus:outline-none focus:ring-[1px] focus:ring-[#02B18A] my-[4px] rounded-md w-full bg-gray-50 py-[8px] px-[8px]"
                                   required
                                   type="text"
                                   name="name"
                                   id="name"
                                   value="{{ old('name') }}"
                                   placeholder="Enter username">
                        </div>
                        <!-- Email -->
                        <div>
                            <label class="text-gray-900" for="email">Email:</label><br>
                            <input class="border border-gray-300 focus:outline-none focus:ring-[1px] focus:ring-[#02B18A] my-[4px] rounded-md w-full bg-gray-50 py-[8px] px-[8px]"
                                   required
                                   type="email"
                                   name="email"
                                   id="email"
                                   value="{{ old('email') }}"
                                   placeholder="Enter email">
                        </div>
                        <!-- Password -->
                        <div>
                            <label class="text-gray-900" for="password">Password:</label><br>
                            <input class="border border-gray-300 focus:outline-none focus:ring-[1px] focus:ring-[#02B18A] my-[4px] rounded-md w-full bg-gray-50 py-[8px] px-[8px]"
                                   required
                                   type="password"
                                   name="password"
                                   id="password"
                                   placeholder="Enter password">
                        </div>
                        <div>
                            <label class="text-gray-900" for="password_confirmation">Confirm Password:</label><br>
                            <input class="border border-gray-300 focus:outline-none focus:ring-[1px] focus:ring-[#02B18A] my-[4px] rounded-md w-full bg-gray-50 py-[8px] px-[8px]"
                                   required
                                   type="password"
                                   name="password_confirmation"
                                   id="password_confirmation"
                                   placeholder="Confirm your password">
                        </div>
                        <!-- Address -->
                        <div>
                            <label class="text-gray-900" for="address">Address:</label><br>
                            <input class="border border-gray-300 focus:outline-none focus:ring-[1px] focus:ring-[#02B18A] my-[4px] rounded-md w-full bg-gray-50 py-[8px] px-[8px]"
                                   required
                                   type="text"
                                   name="address"
                                   id="address"
                                   value="{{ old('address') }}"
                                   placeholder="Enter address">
                        </div>
                        <!-- Phone -->
                        <div>
                            <label class="text-gray-900" for="phone">Phone:</label><br>
                            <input class="border border-gray-300 focus:outline-none focus:ring-[1px] focus:ring-[#02B18A] my-[4px] rounded-md w-full bg-gray-50 py-[8px] px-[8px]"
                                   required
                                   type="text"
                                   name="phone"
                                   id="phone"
                                   value="{{ old('phone') }}"
                                   placeholder="Enter phone number">
                        </div>
                        <!-- Login Redirect -->
                        <p class="text-gray-400">Already have an account?
                            <a class="font-[500] text-[#00AC73] hover:text-[#19b894] text-[1rem]" href="{{ route('login') }}">Login</a>
                        </p>
                        <!-- Submit Button -->
                        <div>
                            <button type="submit"
                                    class="rounded-md shadow-[#02B18A] shadow-[0_3px_10px_rgb(0,0,0,0.2)] bg-[#02B18A] hover:bg-[#00AC73] font-[500] text-[1.3rem] px-[8px] my-[16px] py-[12px] text-white text-center block w-full">
                                Register
                            </button>
                        </div>
                        @if ($errors->any())
                            <div class="bg-red-200 p-4 rounded-md text-red-800 mb-4">
                                <ul>
                                    @foreach ($errors->all() as $error)
                                        <li>{{ $error }}</li>
                                    @endforeach
                                </ul>
                            </div>
                        @endif
                    </form>
                </div>
                <div class="col-span-1"></div>
            </div>
        </div>
    </div>
</div>
@endsection
