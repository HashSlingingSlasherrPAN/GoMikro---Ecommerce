@extends('components/template')
@section('title', 'Detail Produk')

@section('content')
    <div class="grid z-[-2] mt-[24px] grid-cols-12">
        <div class="col-span-1">

        </div>

        <div class="col-span-6">
            <div class="">
                <img class="w-[800px] h-[500px] object-cover shadow-[0_4px_6px_-1px_rgba(0,0,0,0.1),0_2px_4px_-2px_rgba(0,0,0,0.1)] hover:shadow-[0_10px_15px_-3px_rgba(0,0,0,0.1),0_4px_6px_-4px_rgba(0,0,0,0.1)] transition-shadow duration-300" src="{{ asset('storage/' . $data->image) }}" alt="{{$data->name}}">

            </div>
        </div>
        <div class="col-span-4 mx-[40px]">
            <div class="grid gap-[20px]">
                <h1 class="font-[500] text-[1.8rem] pb-[20px]  border-b-[1px] border-[#e5e5e5]">{{ $data->name }}</h1>
                <p class="font-[400] border-b-[1px] pb-[20px] border-[#e5e5e5] opacity-[70%] text-[1rem]">{{ $data->description }}
                </p>
                <p class="font-[700] text-[1.6rem]">Rp. {{ number_format($data->price, 0, ',', '.') }}</p>

            </div>
            <div>
                <div class="grid gap-4 p-4 rounded-lg my-[20px] b max-w-sm mx-auto">


                    <a class="w-full py-2 text-sm text-center font-semibold text-white bg-[#02b18a] rounded hover:bg-[#02b18a] transition" href="{{url('add_cart',$data->id)}}">
                        Masukan Keranjang
                    </a>


            </div>

        </div>
    </div>

</div>
@if (Session::has('message_sent'))
<script>
     swal({
        title: "Message Sent!",
        text: "{{ Session::get('message_sent') }}",
        icon: "success",
        button: "Oke",
    });
</script>
@endif

@endsection
