@extends('admin.layouts.app')

@section('title', 'Kategori Produk')
@section('content')
<div class="mx-[90px]">
    <h1 class="font-[500] my-[32px] text-[1.8rem]">Kategori Produk</h1>
    
    <!-- Button Tambah Produk -->
    <a href="{{ route('admin.categories.create') }}" class="inline-block bg-[#02B18A] text-white py-2 px-4 rounded hover:bg-[#019f70] mb-4">Tambah Kategori</a>
    
    <!-- Table Produk -->
    <div class="overflow-x-auto">
        <table class="min-w-full bg-white border border-gray-200 rounded-md shadow-md">
            <thead class="bg-[#02B18A] text-white">
                <tr>
                    <th class="py-2 px-4 border-b">Kategori Produk</th>
                    <th class=" bg-white text-black py-2 px-4 border-b">Aksi</th>
                </tr>
            </thead>
            <tbody>
                @foreach ($categories as $category)
                    <tr class="border-b hover:bg-gray-50">
                        <td class="py-2 px-4">{{ $category->name }}</td>

                        <td class="py-2 px-4 flex space-x-2">
                            <!-- Tombol Edit -->
                            <a href="{{ route('admin.categories.edit', $category) }}" 
                               class="bg-blue-500 text-white px-4 py-2 rounded-md shadow-md hover:bg-blue-600 transition duration-200">
                                Edit
                            </a>
                        
                            <!-- Tombol Hapus -->
                            <form action="{{ route('admin.categories.destroy', $category) }}" method="POST">
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