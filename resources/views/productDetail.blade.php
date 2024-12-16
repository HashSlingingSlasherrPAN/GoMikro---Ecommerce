@extends('components/template')
@section('title', 'Detail Produk')

@section('content')
    <div class="grid z-[-2] mt-[24px] grid-cols-12">
        <div class="col-span-1">

        </div>

        <div class="col-span-6">
            <div class="">
                <img class="w-[800px] h-[500px] object-cover shadow-[0_4px_6px_-1px_rgba(0,0,0,0.1),0_2px_4px_-2px_rgba(0,0,0,0.1)] hover:shadow-[0_10px_15px_-3px_rgba(0,0,0,0.1),0_4px_6px_-4px_rgba(0,0,0,0.1)] transition-shadow duration-300" src="{{ asset('products/' . $data->image) }}" alt="">

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
                <div class="grid gap-4 p-4 rounded-lg my-[20px] border border-gray-300 max-w-sm mx-auto">
                    <div class="flex justify-between items-center">
                      <label for="quantity-input" class="text-sm font-medium text-gray-700">Jumlah:</label>
                      <div class="flex items-center space-x-2">
                        <button
                          type="button"
                          id="decrement-button"
                          class="w-6 h-6 bg-gray-200 hover:bg-gray-300 rounded-full flex items-center justify-center focus:ring-1 focus:ring-[#02b18a]"
                        >
                          <svg xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 18 2" class="w-3 h-3 text-gray-700">
                            <path stroke="currentColor" stroke-width="2" d="M1 1h16" />
                          </svg>
                        </button>
                        <input
                          type="text"
                          id="quantity-input"
                          class="w-12 h-6 text-center text-sm border border-gray-300 rounded focus:ring-1 focus:ring-[#02b18a] focus:border-[#02b18a]"
                          value="1"
                          required
                        />
                        <button
                          type="button"
                          id="increment-button"
                          class="w-6 h-6 bg-gray-200 hover:bg-gray-300 rounded-full flex items-center justify-center focus:ring-1 focus:ring-[#02b18a]"
                        >
                          <svg xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 18 18" class="w-3 h-3 text-gray-700">
                            <path stroke="currentColor" stroke-width="2" d="M9 1v16M1 9h16" />
                          </svg>
                        </button>
                      </div>
                    </div>


                    <a class="w-full py-2 text-sm text-center font-semibold text-white bg-[#02b18a] rounded hover:bg-[#02b18a] transition" href="{{url('add_cart',$data->id)}}">
                        Masukan Keranjang
                    </a>
                  </div>

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
