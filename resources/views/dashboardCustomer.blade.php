@extends('components/template')
@section('title', 'GoMikro Dashboard')

@section('content')
<div class="mx-[90px] my-[80px] z-index-19 text-black">

    <div class="grid grid-cols-4 gap-8">
        @foreach ($products as $product)
        <div class="w-[300px]">
            <a href="/productDetail/{{ $product->id }}">
                <div>
                    <img class="object-cover h-[300px] w-[300px]"
                    src="{{ asset('products/' . $product->image) }}"

                         alt="{{ $product->name }}">
                </div>
                <div class="grid gap-[10px] px-[10px] py-[29px]">
                    <h1 class="font-[400] text-[1.2rem]">{{ $product->name }}</h1>
                    <p class="font-[400] text-[1rem]">{{ Str::limit($product->description, 50) }}</p>
                    <p class="font-[500] text-[1.4rem]">Rp. {{ number_format($product->price, 0, ',', '.') }}</p>
                </div>
            </a>
        </div>
        @endforeach
    </div>
</div>
@endsection
