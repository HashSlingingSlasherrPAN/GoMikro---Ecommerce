@extends('admin.layouts.app')

@section('title', 'Dashboard Admin')

@section('content')
<div class="container mx-auto px-6 py-8">
    <h1 class="text-3xl font-bold mb-6">Selamat Datang di Dashboard Admin</h1>


    <!-- Informasi Ringkasan -->
    <div class="grid grid-cols-1 sm:grid-cols-2 md:grid-cols-3 gap-6">
        <!-- Kotak untuk Informasi Order -->
        <div class="bg-white border border-gray-200 rounded shadow p-6 hover:shadow-lg transition duration-150">
            <h2 class="text-lg font-semibold mb-2">Total Pesanan</h2>
            <p class="text-2xl font-bold text-blue-600">{{ $totalOrders }}</p>
            <a href="{{ route('admin.orders.index') }}" class="text-blue-500 hover:underline mt-2 block">Lihat Semua Pesanan</a>
        </div>

        <!-- Kotak untuk Informasi Produk -->
        <div class="bg-white border border-gray-200 rounded shadow p-6 hover:shadow-lg transition duration-150">
            <h2 class="text-lg font-semibold mb-2">Total Produk</h2>
            <p class="text-2xl font-bold text-green-600">{{ $totalProducts }}</p>
            <a href="{{ route('admin.products.index') }}" class="text-green-500 hover:underline mt-2 block">Lihat Semua Produk</a>
        </div>

        <!-- Kotak untuk Informasi Pengguna -->
        <div class="bg-white border border-gray-200 rounded shadow p-6 hover:shadow-lg transition duration-150">
            <h2 class="text-lg font-semibold mb-2">Total Pengguna</h2>
            <p class="text-2xl font-bold text-purple-600">{{ $totalUsers }}</p>
            <a href="" class="text-purple-500 hover:underline mt-2 block">Lihat Semua Pengguna</a>
        </div>
    </div>
</div>
@endsection
