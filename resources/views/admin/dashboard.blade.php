@extends('admin.layouts.app')

@section('title', 'Dashboard Admin')

@section('content')
<div class="container mx-auto px-6 py-8">
    <h1 class="text-3xl font-bold mb-6">Dashboard Admin</h1>

    <!-- Informasi Ringkasan -->
<div class="grid grid-cols-1 sm:grid-cols-2 md:grid-cols-3 gap-6">
    <div class="grid grid-cols-1 md:grid-cols-2 gap-6 bg-[#fbfbfb] rounded-lg p-6 shadow-md group">
        <div class="flex flex-col justify-center">
            <h2 class="font-semibold text-lg mb-2">Total Pesanan</h2>
            <p class="text-2xl font-bold text-gray-800 mb-4">{{ $totalOrders }}</p>
            <a href="{{ route('admin.payments.index') }}" class="text-sm hover:text-[#02b18a]">
                Lihat Semua Pesanan
            </a>
        </div>
    
        <div class="flex justify-center items-center">
            <img src="images/cart.png" alt="Cart Icon" class="w-40 h-40 object-contain transition-transform duration-300 group-hover:scale-125">
        </div>
    </div>
    

    <!-- Kotak untuk Informasi Produk -->
    <div class="grid grid-cols-1 md:grid-cols-2 gap-6 bg-[#fbfbfb] rounded-lg p-6 shadow-md group">

        <div class="flex flex-col justify-center">
            <h2 class="font-semibold text-lg mb-2">Total Produk</h2>
            <p class="text-2xl font-bold text-gray-800 mb-4">{{ $totalProducts }}</p>
            <a href="{{ route('admin.products.index') }}" class="text-sm hover:text-[#02b18a]">
                Lihat Semua Produk
            </a>
        </div>
    
        <div class="flex justify-center items-center">
            <img src="images/box.png" alt="Product Icon" class="w-[90px] object-contain transition-transform duration-300 group-hover:scale-125">
        </div>
    
    </div>
    
    

    <!-- Kotak untuk Informasi Pengguna -->
    <div class="grid grid-cols-1 md:grid-cols-2 gap-6 bg-[#fbfbfb] rounded-lg p-6 shadow-md group">

        <div class="flex flex-col justify-center">
            <h2 class="font-semibold text-lg mb-2">Total Pengguna</h2>
            <p class="text-2xl font-bold text-gray-800 mb-4">{{ $totalUsers }}</p>
            <a href="" class="text-sm hover:text-[#02b18a]">
                Lihat Semua Pengguna
            </a>
        </div>
    
        <div class="flex justify-center items-center">
            <img src="images/Profile.png" alt="User Icon" class="w-40 h-40 object-contain transition-transform duration-300 group-hover:scale-125">
        </div>
    
    </div>
    
@endsection
