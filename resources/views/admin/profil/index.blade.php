@extends('admin.layouts.app')

@section('title', 'Profil Admin')

@section('content')
<div class="container mx-auto px-6 py-8">
    <h1 class="text-3xl font-bold mb-6">Profil Anda</h1>

    <div class="grid grid-cols-1 md:grid-cols-3 gap-6">
        <!-- Avatar User -->
        <div class="flex justify-center items-center">
            <img src="{{asset('images/avatar-admin.png')}}" alt="User Avatar" class="w-40 h-40 object-cover rounded-full shadow-md">
        </div>

        <!-- Informasi User -->
        <div class="bg-[#fbfbfb] rounded-lg p-6 shadow-md">
            <div class="mb-4">
                <label class="text-gray-700 font-semibold" for="name">Name:</label>
                <input class="border border-gray-300 rounded-md w-full bg-gray-50 py-2 px-4 mt-1 focus:outline-none focus:ring-[1px] focus:ring-[#02b18a]"
                    type="text" name="name" id="name" value="{{ Auth::user()->name }}" readonly>
            </div>

            <div class="mb-4">
                <label class="text-gray-700 font-semibold" for="email">Email:</label>
                <input class="border border-gray-300 rounded-md w-full bg-gray-50 py-2 px-4 mt-1 focus:outline-none focus:ring-[1px] focus:ring-[#02b18a]"
                    type="text" name="email" id="email" value="{{ Auth::user()->email }}" readonly>
            </div>

            <div class="mb-4">
                <label class="text-gray-700 font-semibold" for="address">Address:</label>
                <input class="border border-gray-300 rounded-md w-full bg-gray-50 py-2 px-4 mt-1 focus:outline-none focus:ring-[1px] focus:ring-[#02b18a]"
                    type="text" name="address" id="address" value="{{ Auth::user()->address }}" readonly>
            </div>

            <div class="mb-4">
                <label class="text-gray-700 font-semibold" for="phone">Phone:</label>
                <input class="border border-gray-300 rounded-md w-full bg-gray-50 py-2 px-4 mt-1 focus:outline-none focus:ring-[1px] focus:ring-[#02b18a]"
                    type="text" name="phone" id="phone" value="{{ Auth::user()->phone }}" readonly>
            </div>

            <div class="mb-4">
                <label class="text-gray-700 font-semibold" for="role">Role:</label>
                <input class="border border-gray-300 rounded-md w-full bg-gray-50 py-2 px-4 mt-1 focus:outline-none focus:ring-[1px] focus:ring-[#02b18a]"
                    type="text" name="role" id="role" value="{{ Auth::user()->role }}" readonly>
            </div>
        </div>

        <!-- Placeholder Kolom Kosong (Jika Dibutuhkan) -->
        <div class=""></div>
    </div>
</div>
@endsection
