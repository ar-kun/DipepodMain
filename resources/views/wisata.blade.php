@extends('layouts.main')
@section('content')
<!-- Hero section start -->
<section class="h-screen bg-cover bg-center bg-no-repeat" id="wisata"
  style="background-image: url('{{ asset('asset/images/wisata.png') }}');">
  <div class="container">
    <div class="flex h-screen flex-wrap items-center justify-center">
      <div class="w-3/4 self-center px-4 text-center">
        <form>
          <label for="search" class="sr-only mb-2 text-sm font-medium text-gray-900 dark:text-white">Search</label>
          <div class="relative">
            <div class="pointer-events-none absolute inset-y-0 left-0 flex items-center pl-3">
              <svg aria-hidden="true" class="h-5 w-5 text-gray-500 dark:text-gray-400" fill="none" stroke="currentColor"
                viewBox="0 0 24 24" xmlns="http://www.w3.org/2000/svg">
                <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2"
                  d="M21 21l-6-6m2-5a7 7 0 11-14 0 7 7 0 0114 0z"></path>
              </svg>
            </div>
            <input type="search" id="search"
              class="block w-full rounded-3xl border border-gray-300 bg-gray-50 p-4 pl-10 text-sm text-gray-900 focus:border-blue-500 focus:ring-blue-500 dark:border-gray-600 dark:bg-gray-700 dark:text-white dark:placeholder-gray-400 dark:focus:border-blue-500 dark:focus:ring-blue-500"
              placeholder="Search" required />
            <button type="submit"
              class="absolute right-2.5 bottom-2.5 origin-right rounded-lg bg-transparent px-4 py-2 text-sm font-medium text-dark transition-all duration-300 hover:scale-125 focus:outline-none focus:ring-4 focus:ring-blue-300">
              Search
            </button>
          </div>
        </form>
      </div>
    </div>
  </div>
</section>
<!-- Hero section end -->
<!-- About section start -->
<section class="-mt-24 rounded-t-medium bg-white pt-36 pb-32 lg:-mt-32 lg:rounded-t-large" id="about">
  <div class="container">

    <div class="flex flex-wrap">
      <h4 class="mb-3 w-full text-center text-2xl font-bold uppercase text-primary">Wisata</h4>
      <div class="absolute left-0 right-0 w-full">
        <img src="./dist/img/backgound.png" alt="" class="w-full" />
      </div>

      <div class="z-10 mb-6 w-full self-center px-4">
        <p class="mb-6 text-justify text-base font-medium text-dark lg:text-xl">
          <span class="mb-5 block">Wisata Tengah Sawah “Leuwi Ereng” atau disingkat Wates Leuwi Ereng merupakan tempat wisata
            lokal yang dikelola oleh BUMDes Mandiri Desa
            Nagrak Selatan yang berlokasi di Desa Nagrak Selatan Kecamatan Nagrak Kabupaten Sukabumi.</span>
          <span class="mb-5 block">Desa Wisata Leuwi Ereng dinamai berdasarkan lokasinya yang terletak di Kampung Leuwi Ereng RT
            03/06, Desa Nagrak Selatan, Kecamatan Nagrak,
            Kabupaten Sukabumi. Tempat wisata ini buka setiap hari mulai pukul 08.00 hingga 16.00 WIB, dan biasanya mengalami
            lonjakan kunjungan saat
            akhir pekan.</span>

          <span class="mb-5 block">Luas Wates LE ini adalah 1,2 Ha yang merupakan tanah milik desa Nagrak Selatan. berupa sawah
            dan kebun, adapun sarana prasarana yang ada di
            Wates LE ini adalah :</span>
          <li class="text-justify text-base font-medium">Jembatan Pelangi</li>
          <li class="text-justify text-base font-medium">Gazebo</li>
          <li class="text-justify text-base font-medium">Aula</li>
          <li class="text-justify text-base font-medium">Front Office</li>
          <li class="text-justify text-base font-medium">Warung</li>
          <li class="text-justify text-base font-medium">Flyng Fox</li>
          <li class="text-justify text-base font-medium">Tubing</li>
          <li class="text-justify text-base font-medium">Kolam Renang</li>
        </p>
      </div>
    </div>
    <div class="flex flex-wrap rounded-2xl bg-primary p-0">
      <div class="m-0 w-full p-0 h-[35rem] md:w-[50%]">
        <iframe
          src="https://www.google.com/maps/embed?pb=!1m14!1m8!1m3!1d15844.794058230373!2d106.8070912!3d-6.8667994!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x2e68337257cf9781%3A0xe4fdeb818030b3ec!2sDesa%20Wisata%20Tengah%20Sawah!5e0!3m2!1sid!2sid!4v1684197284295!5m2!1sid!2sid"
          class="mb-10 w-full rounded-t-2xl md:rounded-tr-none p-0 md:m-0 md:rounded-l-2xl" height="100%" style="border: 0"
          allowfullscreen="" loading="lazy" referrerpolicy="no-referrer-when-downgrade"></iframe>
      </div>
      <div class="flex w-full flex-col items-center justify-center px-10 lg:w-[50%]">
        <h3 class="mb-2 text-xl font-semibold text-white">Wates Leuwi Ereng</h3>
        <ul class="text-slate-300">
          <li>
            <p class="mb-3 inline-block text-lg hover:text-slate-400">
            <span>Jam Operasional :</span> 08.00 - 16.00 WIB
            </p>
          </li>
          <li>
            <p class="mb-3 inline-block text-lg "><span>Alamat :</span><a class="hover:text-slate-400"
                href="https://goo.gl/maps/kMPAoJUcAeJPpKxh7"> Jl. Ereng, Nagrak Sel., Kec. Nagrak, Kabupaten Sukabumi, Jawa
                Barat 43356</a></p>
          </li>
          <li>
            <p class="mb-3 inline-block text-lg"><span>Contact :</span> 0813-1918-0046</p>
          </li>
          <li>
            <span>Reservasi : </span>
            <form action="/checkout" method="POST">
              @csrf
              <fieldset>
                <legend class="sr-only">Wisata</legend>

                <div class="flex items-center mb-0">
                  <input id="type_tiket-1" type="radio" name="type_tiket" value="5000"
                    class="w-4 h-4 border-gray-300 focus:ring-2 focus:ring-blue-300 dark:focus:ring-blue-600 dark:focus:bg-blue-600 dark:bg-gray-700 dark:border-gray-600"
                    checked>
                  <label for="type_tiket-1" class="block ml-2 text-lg font-medium text-slate-300">
                    Tiket Masuk (Rp. 5.000)
                  </label>
                </div>

                <div class="flex items-center mb-4">
                  <input id="type_tiket-2" type="radio" name="type_tiket" value="10000"
                    class="w-4 h-4 border-gray-300 focus:ring-2 focus:ring-blue-300 dark:focus:ring-blue-600 dark:focus:bg-blue-600 dark:bg-gray-700 dark:border-gray-600">
                  <label for="type_tiket-2" class="block ml-2 text-lg font-medium text-slate-300">
                    Tiket Masuk + Kolam Renang (Rp. 10.000)
                  </label>
                </div>

                <div class="relative z-0 w-full mb-6 group">
              <input type="number" name="qty_product" id="qty_product"
                class="block py-2.5 px-0 w-full text-sm text-white bg-transparent border-0 border-b-2 border-gray-300 appearance-none dark:text-white dark:border-gray-600 dark:focus:border-third focus:outline-none focus:ring-0 focus:border-third peer @error('qty_product') is-invalid @enderror"
                placeholder=" " autofocus value="{{ old('qty_product') }}" />
              <label for="qty_product"
                class="peer-focus:font-medium absolute text-sm text-gray-500 dark:text-gray-400 duration-300 transform -translate-y-6 scale-75 top-3 -z-10 origin-[0] peer-focus:left-0 peer-focus:text-third peer-focus:dark:text-third peer-placeholder-shown:scale-100 peer-placeholder-shown:translate-y-0 peer-focus:scale-75 peer-focus:-translate-y-6 @error('qty_product') is-invalid @enderror">Jumlah Tiket</label>
              @error('qty_product')
              <p id="standard_error_help" class="mt-2 text-xs text-red-600 dark:text-red-400"><span class="font-medium">Oh,
                  snapp!</span> {{ $message }}</p>
              @enderror
            </div>

                <div class="relative z-0 w-full mb-6 group">
              <input type="text" name="phone" id="phone"
                class="block py-2.5 px-0 w-full text-sm text-white bg-transparent border-0 border-b-2 border-gray-300 appearance-none dark:text-white dark:border-gray-600 dark:focus:border-third focus:outline-none focus:ring-0 focus:border-third peer @error('phone') is-invalid @enderror"
                placeholder=" " autofocus value="{{ old('phone') }}" />
              <label for="phone"
                class="peer-focus:font-medium absolute text-sm text-gray-500 dark:text-gray-400 duration-300 transform -translate-y-6 scale-75 top-3 -z-10 origin-[0] peer-focus:left-0 peer-focus:text-third peer-focus:dark:text-third peer-placeholder-shown:scale-100 peer-placeholder-shown:translate-y-0 peer-focus:scale-75 peer-focus:-translate-y-6 @error('phone') is-invalid @enderror">No Handphone / WhatsApp</label>
              @error('phone')
              <p id="standard_error_help" class="mt-2 text-xs text-red-600 dark:text-red-400"><span class="font-medium">Oh,
                  snapp!</span> {{ $message }}</p>
              @enderror
            </div>

                @auth
                <button
                  class="relative inline-flex items-center justify-center p-0.5 mb-2 mr-2 overflow-hidden text-sm font-medium text-gray-900 rounded-lg group bg-gradient-to-br from-third/75 to-third group-hover:from-third/75 group-hover:to-third hover:text-white dark:text-white focus:ring-4 focus:outline-none focus:ring-cyan-200 dark:focus:ring-cyan-800 w-full">
                  <span
                    class="w-full relative px-5 py-2.5 transition-all ease-in duration-75 bg-white dark:bg-gray-900 rounded-md group-hover:bg-opacity-0">
                    Pesan Tiket
                  </span>
                </button>
                    @else
                    <a href="{{ route('login') }}" class="relative inline-flex items-center justify-center p-0.5 mb-2 mr-2 overflow-hidden text-sm font-medium text-gray-900 rounded-lg group bg-gradient-to-br from-cyan-500 to-blue-500 group-hover:from-cyan-500 group-hover:to-blue-500 hover:text-white dark:text-white focus:ring-4 focus:outline-none focus:ring-cyan-200 dark:focus:ring-cyan-800 w-full"><span
                    class="w-full text-center relative px-5 py-2.5 transition-all ease-in duration-75 bg-white dark:bg-gray-900 rounded-md group-hover:bg-opacity-0">
                    Login
                  </span></a>
                  <div class="text-red-500 text-sm italic">
                    <p>*Login Terlebih Dahulu Untuk Memesan Tiket</p>
                  </div>
                @endauth
                
              </fieldset>
            </form>

          </li>
        </ul>
      </div>
    </div>
    
  </div>
</section>
<!-- About section end -->
@endsection