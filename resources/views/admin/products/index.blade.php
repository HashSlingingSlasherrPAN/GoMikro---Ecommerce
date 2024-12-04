@extends('admin.layouts.app')

@section('title', 'Daftar Produk')

@section('content')
    <div class="mx-[90px]">
        <h1 class="font-[500] my-[32px] text-[1.8rem]">Daftar Produk</h1>
        
        <!-- Button Tambah Produk -->
        <a href="{{ route('admin.products.create') }}" class="inline-block bg-[#02B18A] text-white py-2 px-4 rounded hover:bg-[#019f70] mb-4">Tambah Produk</a>
        
        <!-- Table Produk -->
        <div class="overflow-x-auto">
            <table class="min-w-full bg-white border border-gray-200 rounded-md shadow-md">
                <thead class="bg-[#02B18A] text-white">
                    <tr>
                        <th class="py-2 px-4 border-b">Nama</th>
                        <th class="py-2 px-4 border-b">Harga</th>
                        <th class="py-2 px-4 border-b">Stok</th>
                        <th class="py-2 px-4 border-b">Kategori</th>
                        <th class="py-2 px-4 border-b">Gambar</th>
                        <th class="py-2 px-4 border-b">Aksi</th>
                    </tr>
                </thead>
                <tbody>
                    @foreach ($products as $product)
                        <tr class="border-b hover:bg-gray-50">
                            <td class="py-2 px-4">{{ $product->name }}</td>
                            <td class="py-2 px-4">{{ $product->price }}</td>
                            <td class="py-2 px-4">{{ $product->stock }}</td>
                            <td class="py-2 px-4">
                                @foreach ($product->categories as $category)
                                    <span class="block">{{ $category->name }}</span>
                                @endforeach
                            </td>
                            <td class="py-2 px-4">
                                @if ($product->image)
                                    <img src="{{ asset('storage/' . $product->image) }}" alt="{{ $product->name }}" class="max-w-[100px] mx-auto">
                                @else
                                    <span class="text-gray-500">Tidak ada gambar</span>
                                @endif
                            </td>
                            <td class="py-2 px-4 flex space-x-2">
                                <!-- Tombol Edit -->
                                <a href="{{ route('admin.products.edit', $product) }}" 
                                   class="bg-blue-500 text-white px-4 py-2 rounded-md shadow-md hover:bg-blue-600 transition duration-200">
                                    Edit
                                </a>
                            
                                <!-- Tombol Hapus -->
                                <form action="{{ route('admin.products.destroy', $product) }}" method="POST">
                                    @csrf
                                    @method('DELETE')
                                    <button type="submit" 
                                            class="bg-red-500 text-white px-4 py-2 rounded-md shadow-md hover:bg-red-600 transition duration-200">
                                        Hapus
                                    </button>
                                </form>
                            </td>
                            
                        </tr>
                    @endforeach
                </tbody>
            </table>
        </div>
    </div>
@endsection
