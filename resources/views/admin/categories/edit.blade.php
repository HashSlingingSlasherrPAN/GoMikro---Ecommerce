@extends('admin.layouts.app')

@section('title', 'Edit Produk')

@section('content')

<div class="mx-[90px]">
    <h1 class="font-[500] my-[32px] text-[1.8rem]">Edit Kategori Produk</h1>
    
    <!-- Form Edit Produk -->
    <div class="flex justify-center">
        <form action="{{ route('admin.categories.update', $category) }}" method="POST"  class="w-full max-w-3xl bg-white p-6 border border-gray-200 rounded-md shadow-md">
            @csrf
            @method('PUT')
            
            <!-- Input Nama Produk -->
            <div class="mb-4">
                <label for="name" class="block text-gray-700 mb-2">Nama Produk</label>
                <input type="text" id="name" name="name" value="{{ old('name', $category->name) }}" class="w-full border border-gray-300 rounded-md focus:outline-none focus:ring-[1px] focus:ring-[#02B18A] py-2 px-3" required>
            </div>

            
            <!-- Submit Button -->
            <div class="flex justify-between items-center mt-4">
                <!-- Tombol Kembali -->
                <a href="{{ route('admin.categories.index') }}" 
                   class="bg-gray-300 text-gray-800 py-2 px-4 rounded hover:bg-gray-400 transition duration-200">
                    Kembali
                </a>
            
                <!-- Tombol Simpan Perubahan -->
                <button type="submit" 
                        class="bg-[#02B18A] text-white py-2 px-4 rounded hover:bg-[#019f70] transition duration-200">
                    Simpan Perubahan
                </button>
            </div>
        </form>
    </div>
</div>
@endsection