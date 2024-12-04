@extends('admin.layouts.app')
@section('title', 'Detail Order')

@section('content')
<div class="container mx-auto bg-white shadow rounded p-6">
    <h2 class="text-2xl font-bold mb-4">Detail Pesanan #{{ $order->id }}</h2>
    
    <div class="grid grid-cols-2 gap-4 mb-6">
        <div class="flex items-center">
            <p class="font-medium w-32">User:</p>
            <p>{{ $order->user->name }}</p>
        </div>
        <div class="flex items-center">
            <p class="font-medium w-32">Status:</p>
            <p class="text-gray-600">{{ ucfirst($order->status) }}</p>
        </div>
        <div class="flex items-center">
            <p class="font-medium w-32">Kurir:</p>
            <p>{{ $order->shippingMethod ? $order->shippingMethod->name : 'Tidak ada' }}</p>
        </div>
        <div class="flex items-center">
            <p class="font-medium w-32">Total:</p>
            <p class="text-green-600 font-semibold">Rp{{ number_format($order->total_price, 0, ',', '.') }}</p>
        </div>
    </div>

    <div class="mt-8">
        <h3 class="text-xl font-semibold mb-4">Daftar Produk</h3>
        <table class="w-full border-collapse bg-white shadow rounded">
            <thead class="bg-gray-100">
                <tr>
                    <th class="px-4 py-2 text-left border">Nama Produk</th>
                    <th class="px-4 py-2 text-left border">Jumlah</th>
                    <th class="px-4 py-2 text-left border">Harga</th>
                    <th class="px-4 py-2 text-left border">Biaya Ongkir</th>
                    <th class="px-4 py-2 text-left border">Subtotal</th>
                </tr>
            </thead>
            <tbody>
                @foreach ($order->items as $item)
                <tr class="border-b hover:bg-gray-50">
                    <td class="px-4 py-2 border">{{ $item->product->name }}</td>
                    <td class="px-4 py-2 border text-center">{{ $item->quantity }}</td>
                    <td class="px-4 py-2 border">Rp{{ number_format($item->price, 0, ',', '.') }}</td>
                    <td class="px-4 py-2 border">Rp{{ number_format($order->shippingMethod->price, 0, ',', '.') }}</td>
                    <td class="px-4 py-2 border">Rp{{ number_format($item->subtotal, 0, ',', '.') }}</td>
                </tr>
                @endforeach
            </tbody>
        </table>
        <p class="mt-4 text-lg font-bold text-right">Total Biaya Pesanan: Rp{{ number_format($order->items->sum('subtotal') + ($order->shippingMethod ? $order->shippingMethod->price : 0), 0, ',', '.') }}</p>
    </div>

    <div class="mt-6">
        <form action="{{ route('admin.orders.update', $order) }}" method="POST" class="mt-4">
            @csrf
            @method('PUT')
            <label for="status" class="block text-sm font-medium mb-2">Ubah Status</label>
            <select id="status" name="status" class="w-full border-gray-300 rounded shadow">
                <option value="pending" {{ $order->status == 'pending' ? 'selected' : '' }}>Pending</option>
                <option value="processing" {{ $order->status == 'processing' ? 'selected' : '' }}>Processing</option>
                <option value="shipped" {{ $order->status == 'shipped' ? 'selected' : '' }}>Shipped</option>
                <option value="delivered" {{ $order->status == 'delivered' ? 'selected' : '' }}>Delivered</option>
            </select>
            <button type="submit" class="mt-4 bg-green-500 text-white px-4 py-2 rounded hover:bg-green-600 focus:outline-none focus:ring focus:ring-green-300">Simpan</button>
        </form>
    </div>

    <div class="mt-4">
        <a href="{{ route('admin.orders.index') }}" class="inline-block text-blue-500 hover:underline">Kembali ke Daftar Order</a>
    </div>
</div>
@endsection
