@extends('admin.layouts.app')
@section('title','Admin Tambah Product')
@section('content')
<div class="relative min-h-screen bg-white-900">
    <!-- Overlay Gelap -->
    <div class="absolute inset-0 bg-gry opacity-10"></div>

    <!-- Konten Utama -->
    <div class="relative flex justify-center items-center min-h-screen">
        <div class="bg-white shadow-md rounded-lg p-8 w-full max-w-lg">
            <h1 class="text-2xl font-bold text-gray-800 mb-6 text-center">Tambah Produk Baru</h1>
            
            <form action="{{ route('admin.categories.store') }}" method="POST" class="space-y-4">
                @csrf <!-- Token keamanan untuk form -->

                <!-- Nama Produk -->
                <div>
                    <label for="name" class="block text-sm font-medium text-gray-700 mb-2">Nama Kategori</label>
                    <input 
                        type="text" 
                        id="name" 
                        name="name" 
                        class="w-full px-4 py-2 border border-gray-300 rounded-lg shadow-sm focus:ring-2 focus:ring-[#02B18A] focus:outline-none" 
                        placeholder="Masukkan nama kategori" 
                        required>
                </div>

                <div class="flex justify-between">
                    <!-- Tombol Kembali -->
                    <a href="{{ route('admin.categories.index') }}" 
                       class="bg-gray-300 text-gray-700 px-6 py-2 rounded-lg shadow-lg hover:bg-gray-400 transition duration-200">
                        Kembali
                    </a>

                    <!-- Tombol Simpan -->
                    <button 
                        type="submit" 
                        class="bg-[#02B18A] text-white px-6 py-2 rounded-lg shadow-lg  hover:bg-[#019f70] transition duration-200">
                        Tambah Kategori
                    </button>
                </div>
            </form>
        </div>
    </div>
</div>
@endsection