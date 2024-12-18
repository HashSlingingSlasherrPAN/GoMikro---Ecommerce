@extends('admin.layouts.app')

@section('title', 'Kategori Produk')
@section('content')
<div class="w-full overflow-x-auto bg-[#fbfbfb] rounded-lg shadow-md">
    <div class="flex justify-between">
        <h1 class="text-3xl font-bold p-6">Kategori Produk</h1>

         <!-- Button Tambah Produk -->
        <a href="{{ route('admin.categories.create') }}" class="fixxed p-5 mr-5 group">

            <img
                src="{{ asset('images/addhover.png') }}"
                alt="Tambah Kategori Hover"
                class="w-10 h-10 group-hover:hidden"
            >

            <img
                src="{{ asset('images/add.png') }}"
                alt="Tambah Kategori"
                class="w-10 h-10 hidden group-hover:block"
            >

        </a>


    </div>

    <hr>
    <!-- Table Produk -->
    <div>
        <table id="category-table" class="w-full table-auto border-separate border-spacing-0 overflow-hidden">
            <thead>
                <tr>
                    <th class="px-6 py-4 text-left rounded-tl-lg">Jenis Kategori</th>
                    <th class="px-4 py-4 text-center rounded-tr-lg">Aksi</th>
                </tr>
            </thead>
            <tbody>
                @foreach ($categories as $category)
                    <tr class="group hover:bg-[#f0f3f7]">
                        <!-- Kolom Kategori Produk -->
                        <td class="px-6 py-4">{{ $category->name }}</td>

                        <!-- Kolom Aksi -->
                        <td class="px-6 py-4 text-center flex justify-center items-center gap-6">
                            <!-- Tombol Edit -->
                            <a href="{{ route('admin.categories.edit', $category) }}" class="text-blue-500 hover:scale-110 transition-transform duration-300">
                                <img src="{{ asset('images/editBlue.png') }}" class="w-[40px] h-[40px]" alt="">
                            </a>

                            <!-- Tombol Hapus -->
                            <form action="{{ route('admin.categories.destroy', $category) }}" method="POST">
                                @csrf
                                @method('DELETE')
                                <button type="submit" class="text-red-500 hover:scale-110 transition-transform duration-300">
                                    <img class="w-[40px] h-[40px]" src="{{ asset('images/deleteRed.png') }}" alt="">
                                </button>
                            </form>
                        </td>
                    </tr>
                @endforeach
            </tbody>
        </table>
    </div>
</div>
<script>
    $(document).ready(function () {
        $('#category-table').DataTable({
            "paging": true,
            "ordering": true,
            "info": true,
            "searching": true,
            "language": {
                "search": "Cari:",
                "lengthMenu": "Tampilkan _MENU_ data per halaman",
                "info": "Menampilkan _START_ hingga _END_ dari _TOTAL_ data",
                "paginate": {
                    "first": "Pertama",
                    "last": "Terakhir",
                    "next": "Berikutnya",
                    "previous": "Sebelumnya"
                }
            }
        });
    });
</script>

@endsection
