

  @extends('layouts.main')
  @section('content')
      
<section class="bg-primary/50" id="wisata" style="background-image: url('{{ asset('asset/images/background.png') }}');">
  <div class="container py-20 lg:pt-32">
    <div class="flex flex-col items-center justify-center">
  <div class="max-w-md w-full h-full mx-auto z-10 bg-blue-900 rounded-3xl">
    <div class="flex flex-col">
      <div class="bg-white relative drop-shadow-2xl  rounded-3xl p-4 m-4">
        <div class="flex-none sm:flex">
          <div class=" relative h-32 w-32   sm:mb-0 mb-3 hidden">
            <img src="https://tailwindcomponents.com/storage/avatars/njkIbPhyZCftc4g9XbMWwVsa7aGVPajYLRXhEeoo.jpg" alt="aji"
              class=" w-32 h-32 object-cover rounded-2xl">
            <a href="#"
              class="absolute -right-2 bottom-2   -ml-3  text-white p-1 text-xs bg-green-400 hover:bg-green-500 font-medium tracking-wider rounded-full transition ease-in duration-300">
              <svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 20 20" fill="currentColor" class="h-4 w-4">
                <path
                  d="M13.586 3.586a2 2 0 112.828 2.828l-.793.793-2.828-2.828.793-.793zM11.379 5.793L3 14.172V17h2.828l8.38-8.379-2.83-2.828z">
                </path>
              </svg>
            </a>
          </div>
          <div class="flex-auto justify-evenly">
            <div class="flex justify-between">
              <div class="flex self-center items-center my-1">
                <span class="mr-3 rounded-full bg-white w-8 h-8">
                  <img
                    src="{{ asset('asset/images/logo.png') }}">
                </span>
                <div class="flex flex-col">
                  <h2 class="font-medium mt-2">Wisata Water Lewui Ereng</h2>
                  <div class=" text-blue-800">Nagrak Selatan</div>
                </div>
              </div>
            </div>
            <div class=" border-dashed border-b-2 my-5"></div>
            <div class="flex items-center">
              <div class="flex flex-col w-full">
                <div class="flex justify-center text-xs text-gray-400">
                  <span class="text-center">Tiket @if ($order->tipe_tiket == 'wisata')
                      Wisata
                      @else
                      Wisata & Kolam Renang
                  @endif</span>
                </div>
                <div class="my-5">
                  <div class="text-xs">Jumlah Tiket: {{ $order->qty_product }} </div>
                  <div class="text-xs mb-5">Harga Tiket Satuan : {{number_format($order->total_price / $order->qty_product, 0, ',', '.') }} </div>
                  <div class="text-xs text-center">{{ $order->user->name }}</div>
                  <div class=" w-full text-center flex-none text-lg text-blue-800 font-bold leading-none">Total Pembayaran : {{ "Rp " . number_format($order->total_price, 0, ',', '.') }}</div>
                </div>
                <div class="flex flex-col justify-center text-sm mx-auto">
                  <h6 class="font-bold text-center">Barcode</h6>
                  <div class=" flex justify-center text-center flex-col">
                    <button id="pay-button"
                class="text-white bg-blue-700 hover:bg-blue-800 focus:ring-4 focus:outline-none focus:ring-blue-300 font-medium rounded-lg text-sm px-5 py-2.5 text-center dark:bg-blue-600 dark:hover:bg-blue-700 dark:focus:ring-blue-800">Bayar Sekarang</button></p>
                  </div>
                </div>
              </div>
            </div>
          </div>
        </div>
      </div>

    </div>
  </div>
  </div>
</section>


  <script>
    const snapToken = "{{ $snapToken }}";
    const url = "{{ $order->order_id }}";
</script>
  @vite(['resources/js/payment.js'])

  <script src="{{ asset('asset/js/closeAlert.js') }}"></script>

    @endsection
{{-- </x-app-layout> --}}

