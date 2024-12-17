@extends('admin.layouts.app')

@section('title', 'Daftar Produk')

@section('content')

<div class="overflow-x-auto bg-[#fbfbfb] rounded-lg shadow-md">
    <div class="flex justify-between">
        <h1 class="text-3xl font-bold p-6">Daftar Produk</h1>

        <!-- Gambar dengan efek hover -->
        <a 
            href="{{ route('admin.products.create') }}" 
            class="p-5 mr-5 group"
        >
            <!-- Gambar Hover -->
            <img 
                src="{{ asset('images/addhover.png') }}" 
                alt="Tambah Produk Hover" 
                class="w-10 h-10 group-hover:hidden"
            >
            <!-- Gambar Default -->
            <img 
                src="{{ asset('images/add.png') }}" 
                alt="Tambah Produk" 
                class="w-10 h-10 hidden group-hover:block"
            >
        </a>
    </div>
    <hr>
    <!-- Table Produk -->
    <div>
        <table class="min-w-full table-auto border-separate border-spacing-0 overflow-hidden">
            <thead>
                <tr>
                    <th class="px-4 py-2 rounded-tl-lg">Nama</th>
                    <th class="px-4 py-2">Harga</th>
                    <th class="px-4 py-2">Stok</th>
                    <th class="px-4 py-2">Kategori</th>
                    <th class="px-4 py-2">Gambar</th>
                    <th class="px-4 py-2 rounded-tr-lg">Aksi</th>
                </tr>
            </thead>
            <tbody>
                @foreach ($products as $product)
                    <tr class="group hover:bg-[#f0f3f7]">
                        <td class="text-center px-4 py-2 group-hover:bg-[#f0f3f7]">{{ $product->name }}</td>
                        <td class="text-center px-4 py-2 group-hover:bg-[#f0f3f7]">{{ $product->price }}</td>
                        <td class="text-center px-4 py-2 group-hover:bg-[#f0f3f7]">{{ $product->stock }}</td>
                        <td class="text-center px-4 py-2 group-hover:bg-[#f0f3f7]">
                            @foreach ($product->categories as $category)
                                <span>{{ $category->name }}</span>
                            @endforeach
                        </td>
                        <td>
                            @if ($product->image)
                                <img src="{{ asset('storage/' . $product->image) }}" alt="{{ $product->name }}" class="w-16 h-16 object-contain mx-auto rounded-lg">
                            @else
                                <span>Tidak ada gambar</span>
                            @endif
                        </td>
                        <td class="flex justify-center items-center gap-6 py-5">
                            <!-- Tombol Edit -->
                            <a href="{{ route('admin.products.edit', $product) }}" class="text-blue-500 hover:scale-110 transition-transform duration-300">Edit</a>
                        
                            <!-- Tombol Hapus -->
                            <form action="{{ route('admin.products.destroy', $product) }}" method="POST">
                                @csrf
                                @method('DELETE')
                                <button type="submit" class="text-red-500 hover:scale-110 transition-transform duration-300">Hapus</button>
                            </form>
                        </td>
                    </tr>
                @endforeach
            </tbody>
        </table>
    </div>

    {{-- <!-- Button Tambah Produk -->
    <a href="{{ route('admin.products.create') }}">Tambah Produk</a> --}}
</div>


@endsection