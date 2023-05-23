<x-app-layout>
  <x-slot name="header">
    <div class="w-full flex justify-between items-center">
      <h2 class="font-semibold text-xl text-gray-800 leading-tight">
        {{ __('Usaha Mikro Kecil dan Menengah (UMKM) Desa Nagrak Selatan') }}
      </h2>
      <div class="flex gap-5">
        <div class="py-6 text-gray-900 ">
        <li type="none"><a href="/dashboard/umkm/pengajuan"
            class="bg-blue-500 hover:bg-blue-400 text-white font-bold py-2 px-4 border-b-4 border-blue-700 hover:border-blue-500 rounded">Daftar Pengajuan</a></li>
      </div>
      <div class="py-6 text-gray-900 ">
        <li type="none"><a href="/dashboard/umkm/create"
            class="bg-blue-500 hover:bg-blue-400 text-white font-bold py-2 px-4 border-b-4 border-blue-700 hover:border-blue-500 rounded">Create
            New</a></li>
      </div>
      </div>
    </div>
  </x-slot>

  <section class="bg-slate-300" id="berita">
   <div class="container pb-20 pt-20 lg:pt-32">
    <div class="flex flex-wrap">
     <div class="w-full lg:w-[30%]">
      <img src="https://source.unsplash.com/360x200?programming" alt="" class="drop-shadow-2xl rounded-lg">
      <div class="py-6 text-gray-900 ">
        <li type="none"><a href="/dashboard/umkm"
            class="bg-blue-500 hover:bg-blue-400 text-white font-bold py-2 px-4 border-b-4 border-blue-700 hover:border-blue-500 rounded"><i class="fa-solid fa-arrow-left"></i> Kembali ke list</a></li>
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
        <li class="text-lg italic">Informasi Pemohon</li>
        <li><b>Nama Lengkap :</b> {{ $umkm->nama_penjual }}</li>
        <li><b>Contact :</b> {{ $umkm->contact }}</li>
        <li><b>Alamat :</b> {{ $umkm->alamat_penjual }}</li>
        <li class="text-lg italic mt-4">Spesifikasi Produk</li>
        <li><b>Kondisi Penyimpanan :</b> {{ $umkm->kondisi_penyimpanan }}</li>
        <li><b>Jenis Produk :</b> Makanan Ringan</li>
        <li><b>Berat Produk :</b> {{ $umkm->berat_produk }}</li>
        <li><b>Produk :</b> Halal</li>
        <li><b>Masa Penyimpanan :</b> {{ $umkm->expired }}</li>

      </ul>
     </div>
    </div>
  </section>

  </x-app-layout>