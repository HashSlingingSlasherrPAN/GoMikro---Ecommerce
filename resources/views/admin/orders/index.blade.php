@extends('admin.layouts.app')

@section('title', 'Daftar Pesanan')

@section('content')
<div class="overflow-x-auto bg-[#fbfbfb] rounded-lg shadow-md">
    <h1 class="text-3xl font-bold p-6">Daftar Order</h1>
    <hr>
    <table class="min-w-full table-auto border-separate border-spacing-0 overflow-hidden">
        <thead>
            <tr class="">
                <th class="px-4 py-2 rounded-tl-lg">ID</th>
                <th class="px-4 py-2">User</th>
                <th class="px-4 py-2">Total</th>
                <th class="px-4 py-2">Status</th>
                <th class="px-4 py-2">Kurir</th>
                <th class="px-4 py-2 rounded-tr-lg">Aksi</th>
            </tr>
        </thead>
        
        <tbody>
            @foreach ($orders as $order)
            <tr class="group border-b hover:bg-[#f0f3f7]">
                <td class="text-center px-4 py-2 group-hover:bg-[#f0f3f7]" >{{ $order->id }}</td>
                <td class="text-center px-4 py-2 group-hover:bg-[#f0f3f7]">{{ $order->user ? $order->user->name : 'User Tidak Ditemukan' }}</td>
                <td class="text-center px-4 py-2 group-hover:bg-[#f0f3f7]">Rp{{ number_format($order->total_price, 0, ',', '.') }}</td>
                <td class="text-center px-4 py-2 group-hover:bg-[#f0f3f7]">{{ ucfirst($order->status) }}</td>
                <td class="text-center px-4 py-2 group-hover:bg-[#f0f3f7]">{{ $order->shippingMethod ? $order->shippingMethod->name : 'Tidak ada' }}</td>
                <td class="flex justify-center items-center gap-6 py-2 group-hover:bg-[#f0f3f7]">
                    <a href="{{ route('admin.orders.show', $order) }}" class="text-blue-500 hover:scale-110 transition-transform duration-300">
                        Detail
                    </a>
                    <form action="{{ route('admin.orders.destroy', $order) }}" method="POST">
                        @csrf
                        @method('DELETE')
                        <button type="submit" class="text-red-500 hover:scale-110 transition-transform duration-300">
                            Hapus
                        </button>
                    </form>
                </td>
            </tr>
            @endforeach
        </tbody>
    </table>
</div>

@endsection