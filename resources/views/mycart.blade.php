@extends('components.template')
@section('title', 'Keranjang Belanja Anda')

@section('content')
<div class="mx-[90px]   text-black">
    <?php
    $value = 0;
    ?>
    @foreach ($cart as $cart )

    <div class="grid grid-cols-10 border-b-[1px] border-[#e5e5e5] pb-[80px] pt-[24px] items-center relative   ">
        <div class="col-span-2">
            <a href="">
                <div class="grid grid-cols-2">
                    <div class="col-span-1">
                        <img class="w-[80px] h-[80px] object-cover" src="{{ asset('storage/' . $cart->product->image) }} " alt="">

                    </div>
                    <div class="col-span-1 text-[0.9rem] font-[500]">
                        <h1>{{ $cart->product->name }}</h1>


                    </div>

                </div>
            </a>

        </div>
        <div class="col-span-4 relative">


        </div>
        <div class="col-span-1">
            <p>                        <h1>{{ $cart->product->price }}</h1>
            </p>


        </div>
        <div class="col-span-2">

        </div>
        <div class="col-span-1 relative group">
            <a href="">
                <img class="h-[40px] group m-[5px] group-hover:hidden hover:bg-[#f0f3f7] hover:rounded-lg" src="{{ asset('images/delete.png') }}" alt="Profile">
            </a>
            <a href="{{ url('delete_cart', $cart->id) }}">
                <img class="h-[40px] hidden group-hover:block m-[5px] hover:bg-[#f0f3f7] hover:rounded-lg" src="{{ asset('images/deleteRed.png') }}" alt="Profile Hover">
            </a>
        </div>



    </div>


    <?php
    $value = $value + $cart->product->price;
    ?>
    @endforeach




    <div class="bg-[#fbfbfb]  sticky bottom-0 shadow-[0_-4px_6px_-2px_rgba(0,0,0,0.1)]">
        <div class="grid grid-cols-12">

            <div class="col-span-3 flex flex-col justify-center items-center">
                <h1 class="text-sm font-medium">Total Harga:</h1>
                <h1 class="font-medium text-[#00ac73] text-[2rem]">Rp. {{ $value }}</h1>
              </div>
          <!-- Left Section: Form -->
          <div class="col-span-9">
            <form class="grid grid-cols-12  gap-4 my-[12px]"  id="payment-form" >
                @csrf
                <input type="hidden" id="snap-token" name="snap_token">

                <div class="col-span-9">
                    <div class="grid grid-cols-3 grid-rows-2 gap-[4px] mx-[12px]">
                        <div class="col-span-1 ">
                            <label for="name" class="block text-sm font-medium">Nama:</label>
                            <input
                              type="text"
                              name="name"
                              id="name"
                              class="w-full border border-gray-300 rounded px-3 py-1 text-sm"
                              placeholder="Masukkan nama"
                              value="{{ Auth::user()->name }}"
                            >
                          </div>
                          <div class="col-span-2">
                            <label for="address" class="block text-sm font-medium">Alamat:</label>
                            <input
                              type="text"
                              name="address"
                              id="address"
                              class="w-full border border-gray-300 rounded px-3 py-1 text-sm"
                              placeholder="Masukkan alamat"
                              value="{{ Auth::user()->address }}"
                            >
                          </div>
                          <div class="col-span-1 ">
                            <label for="phone" class="block text-sm font-medium">No. Telepon :</label>
                            <input
                              type="text"
                              name="phone"
                              id="phone"
                              class="w-full border border-gray-300 rounded px-3 py-1 text-sm"
                              placeholder="Masukkan nomor telepon"
                              value="{{ Auth::user()->phone }}"
                            >
                          </div>
                          <!-- Address Field -->


                          <!-- Phone Field -->


                    </div>

                </div>
              <!-- Name Field -->
              <div class="col-span-3 ">
                <div class="grid grid-rows-12 grid-cols-12 h-full">
                    <div class="row-span-1 col-span-12"></div> <!-- Top row -->
                    <div class="row-span-10 col-span-12 flex justify-center items-center"> <!-- Middle row -->
                        <input
                            type="submit"
                            name="submit"
                            value="Checkout"
                            id="pay-button"
                            class="font-[400] text-[1.2rem] px-16 py-3 bg-[#00ac73] rounded text-white hover:bg-[#19b894] w-auto cursor-pointer">
                    </div>
                    <div class="row-span-1 col-span-12"></div> <!-- Bottom row -->
                </div>


              </div>

              <!-- Submit Button -->

            </form>
          </div>

          <!-- Right Section: Total Price -->

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
<script src="https://app.sandbox.midtrans.com/snap/snap.js" data-client-key="{{ env('MIDTRANS_CLIENT_KEY') }}"></script>
<script>
    document.getElementById('pay-button').addEventListener('click', function (e) {
        e.preventDefault();

        // Send AJAX request to generate SNAP token
        fetch('{{ url("/payments") }}', {
            method: 'POST',
            headers: {
                'Content-Type': 'application/json',
                'X-CSRF-TOKEN': '{{ csrf_token() }}',
            },
            body: JSON.stringify({
                price: {{ $value }},
                item_name: 'Item Cart',
                customer_first_name: '{{ Auth::user()->name }}',
                customer_email: '{{ Auth::user()->email }}',
            }),
        })
        .then(response => response.json())
        .then(data => {
            if (data.snap_token) {
                // Open SNAP payment pop-up
                snap.pay(data.snap_token, {
    onSuccess: function(result) {
        alert('Payment Success!');
        console.log(result);
        // Redirect ke halaman mycart
        window.location.href = '{{ url("/mycart") }}';
    },
    onPending: function(result) {
        alert('Payment Pending...');
        console.log(result);
    },
    onError: function(result) {
        alert('Payment Failed!');
        console.log(result);
    }
});

            } else {
                alert('Failed to create payment.');
                console.error(data);
            }
        })
        .catch(error => console.error(error));
    });
</script>

<!-- Include Midtrans Snap.js -->


@endsection
