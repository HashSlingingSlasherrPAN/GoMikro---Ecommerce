@extends('admin.layouts.app')

@section('title', 'Kelola Pembayaran')

@section('content')
<div class="overflow-x-auto bg-[#fbfbfb] rounded-lg shadow-md">
    <h1 class="text-3xl font-bold p-6">Daftar Pesanan</h1>
    <hr>
    @if (session('success'))
        <div class="bg-green-100 border border-green-400 text-green-700 px-4 py-3 rounded relative" role="alert">
            {{ session('success') }}
        </div>
    @endif

    <table class="min-w-full table-auto border-separate border-spacing-0 overflow-hidden">
        <thead>
            <tr>
                <th class="px-4 py-2 rounded-tl-lg">#</th>
                <th class="px-4 py-2">Nama Customer</th>
                <th class="px-4 py-2">Nama Item</th>
                <th class="px-4 py-2">Harga</th>
                <th class="px-4 py-2">Status</th>
                <th class="px-4 py-2 rounded-tr-lg">Aksi</th>
            </tr>
        </thead>
        <tbody>
            @foreach ($payments as $payment)
            <tr class="group border-b hover:bg-[#f0f3f7]">
                <td class="text-center px-4 py-2 group-hover:bg-[#f0f3f7]">{{ $loop->iteration }}</td>
                <td class="text-center px-4 py-2 group-hover:bg-[#f0f3f7]">{{ $payment->customer_first_name }}</td>
                <td class="text-center px-4 py-2 group-hover:bg-[#f0f3f7]">{{ $payment->item_name }}</td>
                <td class="text-center px-4 py-2 group-hover:bg-[#f0f3f7]">Rp {{ number_format($payment->price, 0, ',', '.') }}</td>
                <td class="text-center px-4 py-2 group-hover:bg-[#f0f3f7]">{{ ucfirst($payment->status) }}</td>
                <td class="flex justify-center items-center gap-6 py-2 group-hover:bg-[#f0f3f7]">
                    <!-- Form untuk update status -->
                    <form method="POST" action="{{ route('admin.payments.update-status', $payment->id) }}">
                        @csrf
                        <div class="flex items-center gap-2">
                            <select name="status" class="form-select form-select-sm px-2 py-1 border rounded text-sm">
                                <option value="pending" {{ $payment->status == 'pending' ? 'selected' : '' }}>Pending</option>
                                <option value="paid" {{ $payment->status == 'paid' ? 'selected' : '' }}>Paid</option>
                                <option value="failed" {{ $payment->status == 'failed' ? 'selected' : '' }}>Failed</option>
                            </select>
                            <button type="submit" class="px-4 py-1 text-white transition"><img class="w-[48px] h-[48px]" src="{{ asset('images/save.png') }}" alt=""></button>
                        </div>
                    </form>
                </td>
            </tr>
            @endforeach
        </tbody>
    </table>
</div>
@endsection
