@extends('admin.layouts.app')

@section('title', 'Edit Produk')

@section('content')

<div class="w-full overflow-x-auto bg-[#fbfbfb] rounded-lg shadow-md p-6">
    <h1 class="text-3xl font-bold mb-6">Edit Produk</h1>

    <form action="{{ route('admin.products.update', $product) }}" method="POST" enctype="multipart/form-data" class="flex flex-wrap">
        @csrf
        @method('PUT')

        <!-- Kolom Kiri -->
        <div class="flex-1 space-y-4 pr-4">
            <!-- Nama Produk -->
            <div>
                <label for="name" class="block font-medium mb-2">Nama Produk</label>
                <input 
                    type="text" 
                    id="name" 
                    name="name" 
                    value="{{ old('name', $product->name) }}"
                    class="w-full px-4 py-2 border border-gray-300 rounded-lg focus:border-[#02b18a] active:border-[#02b18a] focus:outline-none"
                    required>
            </div>

            <!-- Harga Produk -->
            <div>
                <label for="price" class="block font-medium mb-2">Harga Produk</label>
                <input 
                    type="number" 
                    id="price" 
                    name="price" 
                    step="0.01" 
                    value="{{ old('price', $product->price) }}"
                    class="w-full px-4 py-2 border border-gray-300 rounded-lg focus:border-[#02b18a] active:border-[#02b18a] focus:outline-none"
                    required>
            </div>

            <!-- Stok Produk -->
            <div>
                <label for="stock" class="block font-medium mb-2">Stok Produk</label>
                <input 
                    type="number" 
                    id="stock" 
                    name="stock" 
                    value="{{ old('stock', $product->stock) }}"
                    class="w-full px-4 py-2 border border-gray-300 rounded-lg focus:border-[#02b18a] active:border-[#02b18a] focus:outline-none"
                    required>
            </div>

            <!-- Kategori Produk -->
            <div>
                <label for="categories" class="block font-medium mb-2">Kategori Produk</label>
                <select 
                    name="categories[]" 
                    id="categories" 
                    multiple
                    class="w-full px-4 py-2 border border-gray-300 rounded-lg focus:border-[#02b18a] active:border-[#02b18a] focus:outline-none"
                    required>
                    @foreach ($categories as $category)
                        <option value="{{ $category->id }}" 
                            @if($product->categories->contains($category->id)) selected @endif>
                            {{ $category->name }}
                        </option>
                    @endforeach
                </select>
            </div>

            <!-- Deskripsi Produk -->
            <div>
                <label for="description" class="block font-medium mb-2">Deskripsi Produk</label>
                <textarea 
                    id="description" 
                    name="description" 
                    rows="5" 
                    class="w-full px-4 py-2 border border-gray-300 rounded-lg focus:border-[#02b18a] active:border-[#02b18a] focus:outline-none"
                    placeholder="Tambahkan deskripsi produk">{{ old('description', $product->description) }}</textarea>
            </div>
        </div>

        <!-- Kolom Kanan -->
        <div class="flex-1 pl-4">
            <!-- Gambar Produk -->
            <div>
                <label for="image" class="block font-medium mb-2">Gambar Produk</label>
                <div class="flex justify-center mt-4 pb-5">
                    @if ($product->image)
                        <img id="imagePreview" src="{{ asset('storage/' . $product->image) }}" class="w-full max-w-xs rounded-md shadow-md" alt="Pratinjau Gambar">
                    @else
                        <img id="imagePreview" class="w-full max-w-xs rounded-md shadow-md" alt="Pratinjau Gambar" style="display: none;">
                    @endif
                </div>

                <input 
                    type="file" 
                    id="image" 
                    name="image" 
                    class="w-full px-4 py-2 border border-gray-300 rounded-lg focus:border-[#02b18a] active:border-[#02b18a] focus:outline-none"
                    accept="image/*"
                    onchange="previewImage(event)">
            </div>
        </div>

        <!-- Tombol Submit -->
        <div class="w-full flex mt-6 space-x-5">
            <!-- Tombol Simpan -->
            <button 
                type="submit" 
                class="text-[#019f70] border border-[#019f70] hover:bg-[#019f70] hover:text-white px-6 py-2 rounded-lg">
                Simpan Perubahan
            </button>

            <!-- Tombol Kembali -->
            <a href="{{ route('admin.products.index') }}" 
                class="text-[#7c808d] border border-[#7c808d] hover:bg-[#7c808d] hover:text-white px-6 py-2 rounded-lg">
                Kembali
            </a>
        </div>
    </form>
</div>

<script>
    function previewImage(event) {
        const input = event.target;
        const preview = document.getElementById('imagePreview');

        if (input.files && input.files[0]) {
            const reader = new FileReader();

            reader.onload = function(e) {
                preview.src = e.target.result;
                preview.style.display = 'block';
            };

            reader.readAsDataURL(input.files[0]);
        }
    }
</script>


@endsection