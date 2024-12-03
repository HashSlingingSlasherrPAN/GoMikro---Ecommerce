@extends('admin.layouts.app')

@section('title', 'Edit Produk')

@section('content')
    <div class="mx-[90px]">
        <h1 class="font-[500] my-[32px] text-[1.8rem]">Edit Produk</h1>
        
        <!-- Form Edit Produk -->
        <div class="flex justify-center">
            <form action="{{ route('admin.products.update', $product) }}" method="POST" enctype="multipart/form-data" class="w-full max-w-3xl bg-white p-6 border border-gray-200 rounded-md shadow-md">
                @csrf
                @method('PUT')
                
                <!-- Input Nama Produk -->
                <div class="mb-4">
                    <label for="name" class="block text-gray-700 mb-2">Nama Produk</label>
                    <input type="text" id="name" name="name" value="{{ old('name', $product->name) }}" class="w-full border border-gray-300 rounded-md focus:outline-none focus:ring-[1px] focus:ring-[#02B18A] py-2 px-3" required>
                </div>

                <!-- Input Harga -->
                <div class="mb-4">
                    <label for="price" class="block text-gray-700 mb-2">Harga</label>
                    <input type="number" id="price" name="price" value="{{ old('price', $product->price) }}" class="w-full border border-gray-300 rounded-md focus:outline-none focus:ring-[1px] focus:ring-[#02B18A] py-2 px-3" required>
                </div>

                <!-- Input Stok -->
                <div class="mb-4">
                    <label for="stock" class="block text-gray-700 mb-2">Stok</label>
                    <input type="number" id="stock" name="stock" value="{{ old('stock', $product->stock) }}" class="w-full border border-gray-300 rounded-md focus:outline-none focus:ring-[1px] focus:ring-[#02B18A] py-2 px-3" required>
                </div>

                <!-- Input Kategori -->
                <div class="mb-4">
                    <label for="categories" class="block text-gray-700 mb-2">Kategori</label>
                    <select name="categories[]" id="categories" multiple class="w-full border border-gray-300 rounded-md focus:outline-none focus:ring-[1px] focus:ring-[#02B18A] py-2 px-3" multiple>
                        @foreach ($categories as $category)
                            <option value="{{ $category->id }}" 
                                @if($product->categories->contains($category->id)) selected @endif>
                                {{ $category->name }}
                            </option>
                        @endforeach
                    </select>
                </div>

                <!-- Input Gambar -->
                <div class="mb-4">
                    <label for="image" class="block text-gray-700 mb-2">Gambar Produk</label>
                    <input type="file" id="image" name="image" class="w-full border border-gray-300 rounded-md focus:outline-none focus:ring-[1px] focus:ring-[#02B18A] py-2 px-3">
                    @if ($product->image)
                        <img src="{{ asset('storage/' . $product->image) }}" alt="{{ $product->name }}" class="mt-4 max-w-[150px]">
                    @endif
                </div>

                <!-- Submit Button -->
                <div class="flex justify-between items-center mt-4">
                    <!-- Tombol Kembali -->
                    <a href="{{ route('admin.products.index') }}" 
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
