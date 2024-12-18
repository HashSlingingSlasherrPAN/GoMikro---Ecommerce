@extends('components/template')
@section('title', 'Order History - Gomikro')

@section('content')
<div class="container mx-auto px-[90px] mt-[40px] mb-[32px]">

    @if ($orders->isEmpty())
        <div class="text-center py-[40px]">
            <p class="text-gray-500 text-lg">You have no orders yet. Start shopping now!</p>
            <a href="{{ url('/') }}" class="mt-[20px] inline-block bg-blue-500 text-white px-[20px] py-[10px] rounded-md hover:bg-blue-600">
                Continue Shopping
            </a>
        </div>
    @else
        <div class="overflow-x-auto">
            <table class="w-full border-collapse border border-gray-300 text-sm text-left">
                <thead class="bg-gray-100">
                    <tr>
                        <th class="border border-gray-300 px-4 py-2">Order ID</th>
                        <th class="border border-gray-300 px-4 py-2">Status</th>
                        <th class="border border-gray-300 px-4 py-2">Item Name</th>
                        <th class="border border-gray-300 px-4 py-2">Price</th>
                        <th class="border border-gray-300 px-4 py-2">Checkout Link</th>
                        <th class="border border-gray-300 px-4 py-2">Date</th>
                    </tr>
                </thead>
                <tbody>
                    @foreach ($orders as $order)
                        <tr class="hover:bg-gray-50">
                            <td class="border border-gray-300 px-4 py-2">{{ $order->order_id }}</td>
                            <td class="border border-gray-300 px-4 py-2">
                                <span class="px-[10px] py-[5px] rounded-md text-white
                                    @if($order->status === 'completed') bg-green-500
                                    @elseif($order->status === 'pending') bg-yellow-500
                                    @elseif($order->status === 'cancelled') bg-red-500
                                    @else bg-gray-500 @endif">
                                    {{ ucfirst($order->status) }}
                                </span>
                            </td>
                            <td class="border border-gray-300 px-4 py-2">{{ $order->item_name }}</td>
                            <td class="border border-gray-300 px-4 py-2">Rp. {{ number_format($order->price, 0, ',', '.') }}</td>
                            <td class="border border-gray-300 px-4 py-2">
                                <a href="{{ $order->checkout_link }}" target="_blank" class="text-blue-500 hover:underline">Checkout</a>
                            </td>
                            <td class="border border-gray-300 px-4 py-2">{{ $order->created_at->format('d M Y, H:i') }}</td>
                        </tr>
                    @endforeach
                </tbody>
            </table>
        </div>
    @endif
</div>
@endsection
