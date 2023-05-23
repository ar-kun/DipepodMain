@extends('layouts.main')
@section('content')
<!-- Hero section start -->
  <section class="bg-slate-300" id="berita">
   <div class="container pb-20 pt-20 lg:pt-32">
    <div class="flex flex-wrap">
     <div class="w-full lg:w-[30%]">
      <img src="{{ asset('storage/' . $umkm->image) }}" alt="" class="drop-shadow-2xl rounded-lg">
      <div class=" flex flex-wrap">
        <p class="text-3xl text-center mt-5 mb-5 w-full">Order By</p>
        <li type="none" class="w-[50%] lg:w-[50%] flex justify-center items-center text-white bg-gradient-to-r from-green-400 via-green-500 to-green-600 hover:bg-gradient-to-br focus:ring-4 focus:outline-none focus:ring-green-300 shadow-lg shadow-green-500/50  font-medium rounded-lg text-sm px-2 py-2.5 text-center mr-2 mb-2"><a class="flex" target="_blank" href="https://api.whatsapp.com/send?phone={{ $umkm->contact }}" ><div class="mr-3 flex h-8 w-8 items-center justify-center rounded-full border border-slate-500 text-slate-700 transition-all duration-300 hover:border-primary hover:bg-primary hover:text-white"
       ><svg width="25" class="fill-current" role="img" viewBox="0 0 24 24" xmlns="http://www.w3.org/2000/svg"><title>WhatsApp</title><path d="M17.472 14.382c-.297-.149-1.758-.867-2.03-.967-.273-.099-.471-.148-.67.15-.197.297-.767.966-.94 1.164-.173.199-.347.223-.644.075-.297-.15-1.255-.463-2.39-1.475-.883-.788-1.48-1.761-1.653-2.059-.173-.297-.018-.458.13-.606.134-.133.298-.347.446-.52.149-.174.198-.298.298-.497.099-.198.05-.371-.025-.52-.075-.149-.669-1.612-.916-2.207-.242-.579-.487-.5-.669-.51-.173-.008-.371-.01-.57-.01-.198 0-.52.074-.792.372-.272.297-1.04 1.016-1.04 2.479 0 1.462 1.065 2.875 1.213 3.074.149.198 2.096 3.2 5.077 4.487.709.306 1.262.489 1.694.625.712.227 1.36.195 1.871.118.571-.085 1.758-.719 2.006-1.413.248-.694.248-1.289.173-1.413-.074-.124-.272-.198-.57-.347m-5.421 7.403h-.004a9.87 9.87 0 01-5.031-1.378l-.361-.214-3.741.982.998-3.648-.235-.374a9.86 9.86 0 01-1.51-5.26c.001-5.45 4.436-9.884 9.888-9.884 2.64 0 5.122 1.03 6.988 2.898a9.825 9.825 0 012.893 6.994c-.003 5.45-4.437 9.884-9.885 9.884m8.413-18.297A11.815 11.815 0 0012.05 0C5.495 0 .16 5.335.157 11.892c0 2.096.547 4.142 1.588 5.945L.057 24l6.305-1.654a11.882 11.882 0 005.683 1.448h.005c6.554 0 11.89-5.335 11.893-11.893a11.821 11.821 0 00-3.48-8.413Z"/></svg> </div><span class="text-2xl">WhatsApp</span> </a>
      </li> 
       <li  class="w-[45%] lg:w-[45%] flex justify-center items-center text-white bg-gradient-to-r from-third via-third/60 to-third/90 hover:bg-gradient-to-br focus:ring-4 focus:outline-none focus:ring-third/75 shadow-lg shadow-third/50  font-medium rounded-lg text-sm px-2 py-2.5 text-center mr-2 mb-2">

        <div class="relative inline-block text-left">
  <button type="button" class="inline-flex justify-center items-center w-full px-4 py-2 text-sm font-medium text-white  rounded-md focus:outline-none focus:ring-2 focus:ring-offset-2 focus:ring-third" id="dropdown-toggle" aria-haspopup="true" aria-expanded="false">
    <span class="text-lg">Online Shop</span>
    <svg class="w-4 h-4 ml-2 -mr-1" xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke="currentColor">
      <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M19 9l-7 7-7-7"></path>
    </svg>
  </button>
  <div class="absolute right-0 z-10 w-40 mt-2 origin-top-right bg-white border border-gray-300 divide-y divide-gray-100 rounded-md shadow-lg focus:outline-none hidden" role="menu" aria-orientation="vertical" aria-labelledby="dropdown-toggle" tabindex="-1" id="dropdown-menu">
    <a target="_blank" href="{{ $umkm->link_shopee }}" class="block px-4 py-2 text-sm text-gray-700 hover:bg-gray-100" role="menuitem" tabindex="-1">Shopee</a>
    <a target="_blank" href="{{ $umkm->link_tokopedia }}" class="block px-4 py-2 text-sm text-gray-700 hover:bg-gray-100" role="menuitem" tabindex="-1">Tokopedia</a>
    <a target="_blank" href="{{ $umkm->link_lainnya }}" class="block px-4 py-2 text-sm text-gray-700 hover:bg-gray-100" role="menuitem" tabindex="-1">Online Shop lain</a>
  </div>
</div>
        
       </li>
      </div>
     </div>
     <div class="w-full lg:w-[70%] mt-10 lg:mt-0 lg:px-20">
      <h2 class="text-2xl lg:text-5xl">{{ $umkm->nama_product }}</h2>
      <h4 class="text-lg lg:text-2xl">Rp. {{ $umkm->harga_minimum }} - {{ $umkm->harga_maximum }}</h4>
      <hr class="h-px my-8 bg-third border-0">
      <h4 class="text-2xl lg:text-3xl">Deskripsi</h4>
      <p class="text-justify">
        {!! $umkm->deskripsi !!}
      </p>
      <ul class="mt-5 bg-primary/75 p-10 rounded-lg text-white">
        <li class="text-lg italic">Spesifikasi Produk</li>
        <li><b>Kondisi Penyimpanan :</b> {{ $umkm->kondisi_penyimpanan }}</li>
        <li><b>Jenis Produk :</b> Makanan Ringan</li>
        <li><b>Berat Produk :</b> {{ $umkm->berat_produk }}</li>
        <li><b>Produk :</b> Halal</li>
        <li><b>Masa Penyimpanan :</b> {{ $umkm->expired }}</li>
        <li><b>Dikirim Dari :</b> {{ $umkm->alamat_penjual }}</li>
      </ul>
     </div>
    </div>
  </section>
  <!-- Hero section end -->

  <script>
  const dropdownToggle = document.getElementById('dropdown-toggle');
  const dropdownMenu = document.getElementById('dropdown-menu');

  dropdownToggle.addEventListener('click', function () {
    dropdownMenu.classList.toggle('hidden');
  });

  document.addEventListener('click', function (event) {
    const isClickInside = dropdownToggle.contains(event.target) || dropdownMenu.contains(event.target);
    if (!isClickInside) {
      dropdownMenu.classList.add('hidden');
    }
  });
</script>
@endsection