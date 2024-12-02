@extends('admin.layouts.app')

@section('title', 'Daftar Pesanan')

@section('content')
<div class="container mx-auto bg-white shadow rounded p-6">
    <h1 class="text-3xl font-bold mb-6">Daftar Order</h1>

    <div class="overflow-x-auto">
        <table class="w-full border-collapse bg-white shadow rounded">
            <thead class="bg-[#02B18A] text-white">
                <tr>
                    <th class="px-4 py-2 text-left border-b text-white">ID</th>
                    <th class="px-4 py-2 text-left border-b text-white">User</th>
                    <th class="px-4 py-2 text-left border-b text-white">Total</th>
                    <th class="px-4 py-2 text-left border-b text-white">Status</th>
                    <th class="px-4 py-2 text-left border-b text-white">Kurir</th>
                    <th class="px-4 py-2 text-left border-b text-white">Aksi</th>
                </tr>
            </thead>
            <tbody>
                @foreach ($orders as $order)
                <tr class="hover:bg-gray-50 border-b border-gray-200">
                    <td class="px-4 py-2 border-t border-gray-200">{{ $order->id }}</td>
                    <td class="px-4 py-2 border-t border-gray-200">{{ $order->user ? $order->user->name : 'User Tidak Ditemukan' }}</td>
                    <td class="px-4 py-2 border-t border-gray-200 text-green-600 font-semibold">Rp{{ number_format($order->total_price, 0, ',', '.') }}</td>
                    <td class="px-4 py-2 border-t border-gray-200 capitalize">{{ ucfirst($order->status) }}</td>
                    <td class="px-4 py-2 border-t border-gray-200">{{ $order->shippingMethod ? $order->shippingMethod->name : 'Tidak ada' }}</td>
                    <td class="px-4 py-2 border-t border-gray-200 flex gap-2">
                        <a href="{{ route('admin.orders.show', $order) }}" class="bg-blue-500 text-white px-3 py-1 rounded hover:bg-blue-600 transition duration-150">Detail</a>
                        <form action="{{ route('admin.orders.destroy', $order) }}" method="POST" class="inline">
                            @csrf
                            @method('DELETE')
                            <button type="submit" class="bg-red-500 text-white px-3 py-1 rounded hover:bg-red-600 transition duration-150">Hapus</button>
                        </form>
                    </td>
                </tr>
                @endforeach
            </tbody>
        </table>
    </div>
</div>
@endsection
