@extends('layouts.main')
@section('content')
<!-- component -->
</style>
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
                      <img src="{{ asset('asset/images/logo.png') }}">
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
                      <span class="text-center">Tiket @if ($invoice->tipe_tiket == 'wisata')
                        Wisata
                        @else
                        Wisata & Kolam Renang
                        @endif</span>
                    </div>
                    <div class="my-5">
                      <div class="w-full text-center flex-none text-lg text-blue-800 font-bold leading-none">
                        {{ $invoice->user->name }}</div>
                      <div class="text-xs text-center">
                        {{ str_repeat('*', strlen($invoice->phone) - 4) . substr($invoice->phone, -4) }}</div>
                      <div class="my-5">
                        <div class="text-xs">Tanggal : {{ date('d M Y, H:i', strtotime($invoice->published_at)) }}</div>
                        <div class="text-xs">@if ($invoice->status)
                          Status : Lunas (Paid)
                        </div>

                        @endif
                      </div>

                      <div class="flex justify-center text-base font-bold leading-none">
                        @php
                        $published_at = \Carbon\Carbon::parse($invoice->published_at);
                        @endphp
                        @if ($invoice->status && $published_at->diffInDays(now()) < 1) <p class="bg-green-400 py-2 px-5 w-fit rounded-md text-white">Tiket Active
                          </p>
                          @else
                          <p class="bg-red-500 py-2 px-5 w-fit rounded-md text-white">Tiket Inactive
                          </p>
                          @endif
                      </div>
                    </div>
                    <div class="flex flex-col justify-center text-sm mx-auto">
                      <h6 class="font-bold text-center">Barcode</h6>
                      <div class=" flex justify-center text-center flex-col">
                        <p>{!! DNS1D::getBarcodeHTML(preg_replace('/\D/', '', $invoice->order_id), "UPCA",2,50 )!!}</p>
                        <p>INV-{{ preg_replace('/\D/', '', $invoice->order_id) }}</p>
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

@endsection