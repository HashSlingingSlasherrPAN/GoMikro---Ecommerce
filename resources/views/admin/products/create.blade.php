@extends('admin.layouts.app')
@section('title','Tambah Produk')
@section('content')
    <div class="relative min-h-screen bg-white-900">
        <!-- Overlay Gelap -->
        <div class="absolute inset-0 bg-gry opacity-10"></div>

        <!-- Konten Utama -->
        <div class="relative flex justify-center items-center min-h-screen">
            <div class="bg-white shadow-md rounded-lg p-8 w-full max-w-lg">
                <h1 class="text-2xl font-bold text-gray-800 mb-6 text-center">Tambah Produk Baru</h1>
                
                <form action="{{ route('admin.products.store') }}" method="POST" enctype="multipart/form-data" class="space-y-4">
                    @csrf <!-- Token keamanan untuk form -->

                    <!-- Nama Produk -->
                    <div>
                        <label for="name" class="block text-sm font-medium text-gray-700 mb-2">Nama Produk</label>
                        <input 
                            type="text" 
                            id="name" 
                            name="name" 
                            class="w-full px-4 py-2 border border-gray-300 rounded-lg shadow-sm focus:ring-2 focus:ring-[#02B18A] focus:outline-none" 
                            placeholder="Masukkan nama produk" 
                            required>
                    </div>

                    <!-- Harga Produk -->
                    <div>
                        <label for="price" class="block text-sm font-medium text-gray-700 mb-2">Harga Produk</label>
                        <input 
                            type="number" 
                            id="price" 
                            name="price" 
                            step="0.01" 
                            class="w-full px-4 py-2 border border-gray-300 rounded-lg shadow-sm focus:ring-2 focus:ring-[#02B18A] focus:outline-none" 
                            placeholder="Masukkan harga produk" 
                            required>
                    </div>

                    <!-- Stok Produk -->
                    <div>
                        <label for="stock" class="block text-sm font-medium text-gray-700 mb-2">Stok Produk</label>
                        <input 
                            type="number" 
                            id="stock" 
                            name="stock" 
                            class="w-full px-4 py-2 border border-gray-300 rounded-lg shadow-sm focus:ring-2 focus:ring-[#02B18A] focus:outline-none" 
                            placeholder="Masukkan jumlah stok produk" 
                            required>
                    </div>

                    <!-- Deskripsi Produk -->
                    <div>
                        <label for="description" class="block text-sm font-medium text-gray-700 mb-2">Deskripsi Produk</label>
                        <textarea 
                            id="description" 
                            name="description" 
                            rows="3" 
                            class="w-full px-4 py-2 border border-gray-300 rounded-lg shadow-sm focus:ring-2 focus:ring-[#02B18A] focus:outline-none" 
                            placeholder="Masukkan deskripsi produk"></textarea>
                    </div>

                    <!-- Gambar Produk -->
                    <div>
                        <label for="image" class="block text-sm font-medium text-gray-700 mb-2">Gambar Produk</label>
                        <input 
                            type="file" 
                            id="image" 
                            name="image" 
                            class="w-full px-4 py-2 border border-gray-300 rounded-lg shadow-sm focus:ring-2 focus:ring-[#02B18A] focus:outline-none">
                    </div>

                    <!-- Kategori Produk -->
                    <div>
                        <label for="category" class="block text-sm font-medium text-gray-700 mb-2">Kategori Produk</label>
                        <select 
                            id="category" 
                            name="category_id" 
                            class="w-full px-4 py-2 border border-gray-300 rounded-lg shadow-sm focus:ring-2 focus:ring-[#02B18A] focus:outline-none" 
                            required>
                            <option value="" disabled selected>Pilih kategori produk</option>
                            @foreach($categories as $category)
                                <option value="{{ $category->id }}">{{ $category->name }}</option>
                            @endforeach
                        </select>
                    </div>

                    <!-- Tombol Submit -->
                    <div class="flex justify-between">
                        <!-- Tombol Kembali -->
                        <a href="{{ route('admin.products.index') }}" 
                           class="bg-gray-300 text-gray-700 px-6 py-2 rounded-lg shadow-lg hover:bg-gray-400 transition duration-200">
                            Kembali
                        </a>

                        <!-- Tombol Simpan -->
                        <button 
                            type="submit" 
                            class="bg-[#02B18A] text-white px-6 py-2 rounded-lg shadow-lg  hover:bg-[#019f70] transition duration-200">
                            Tambah Produk
                        </button>
                    </div>
                </form>
            </div>
        </div>
    </div>
@endsection
