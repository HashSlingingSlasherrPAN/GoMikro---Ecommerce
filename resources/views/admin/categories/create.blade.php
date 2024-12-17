@extends('admin.layouts.app')
@section('title','Admin Tambah Product')
@section('content')

<!-- Konten Utama -->
<div class="w-full overflow-x-auto bg-[#fbfbfb] rounded-lg shadow-md">
    <h1 class="text-3xl font-bold p-6">Tambah Produk Baru</h1>
    <hr>
    <form action="{{ route('admin.categories.store') }}" method="POST" class="space-y-4">
        @csrf <!-- Token keamanan untuk form -->

        <!-- Nama Produk -->
        <div class="pl-6 space-y-4 w-full">
            <label for="name" class="block font-medium">Nama Kategori</label>
            <input 
                type="text" 
                id="name" 
                name="name" 
                class="w-1/2 px-4 py-2 border border-gray-300 rounded-lg focus:border-[#02b18a] active:border-[#02b18a] focus:outline-none"
                placeholder="Masukkan nama kategori" 
                required>
        </div>

        <div class="pl-6">
            <!-- Tombol Simpan -->
            <button type="submit" class="text-[#019f70] border border-[#019f70] hover:bg-[#019f70] hover:text-[white] px-6 py-2 rounded-lg">Tambah</button>

            <!-- Tombol Kembali -->
            <a href="{{ route('admin.categories.index') }}" class="text-[#7c808d] border border-[#7c808d] hover:bg-[#7c808d] hover:text-[white] px-6 py-2 rounded-lg">Kembali</a>
        </div>
    </form>
</div>

@endsection