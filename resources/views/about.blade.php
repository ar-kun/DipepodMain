@extends('layouts.main')
@section('content')
<!-- Hero section start -->
<section class="h-screen bg-cover bg-center bg-no-repeat" id="profile"
  style="background-image: url('{{ asset('asset/images/nagrak.png') }}');">
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
    <div class="-mt-36 flex justify-center">
      <div
        class="flex h-12 w-4/12 items-center justify-center rounded-tl-3xl md:rounded-tl-none md:rounded-b-lg div1 bg-primary text-white lg:w-1/4"
        id="profileDiv" onclick="changeBackgroundColor(1)">
        <span class="text-center text-xl">Profile</span>
      </div>
      <div class="flex h-12 w-4/12 items-center justify-center md:rounded-b-lg div2 bg-primary/75 text-white lg:w-1/4"
        id="perangkatDiv" onclick="changeBackgroundColor(2)">
        <span class="text-center text-xl">Perangkat</span>
      </div>
      <div
        class="flex h-12 w-4/12 items-center justify-center rounded-tr-3xl md:rounded-tr-none md:rounded-b-lg div3 bg-primary/75 text-white lg:w-1/4"
        id="lembagaDiv" onclick="changeBackgroundColor(3)">
        <span class="text-center text-xl">Lembaga</span>
      </div>
    </div>
    {{-- Profile --}}
    <div class="w-full profileDesa flex flex-col " id="profile-desa">
      <div class="mt-16 flex flex-wrap">
        <h4 class="mb-3 w-full text-center text-2xl font-bold uppercase text-primary">Profile Desa</h4>
        <div class="absolute left-0 right-0 w-full">
          <img src="{{ asset('asset/images/backgound.png') }}" alt="" class="w-full" />
        </div>
        <div class="z-10 mb-10 w-full px-4 lg:w-[30%]">
          <div class="flex justify-center">
            <img src="{{ asset('asset/images/PA KADES 1.png') }}" alt="" />
          </div>
          <p class="max-w-xl text-center text-2xl font-medium text-secondary lg:text-3xl">Setiawan</p>
        </div>
        <div class="z-10 w-full flex-col self-center px-4 lg:flex lg:w-[70%]">
          <p class="mb-6 text-justify text-base font-medium text-secondary lg:text-xl">
            <span class="mb-5 block">Lorem ipsum dolor sit amet, consectetur adipiscing elit. Augue tempor sem volutpat pretium
              vehicula enim, ac neque. Scelerisque duis orci
              ultricies viverra tellus ut. Sem orci nunc tortor est amet nisi, mi integer. Nam nulla malesuada turpis vitae sed
              egestas tempor venenatis
              ultrices. Vestibulum, pellentesque et eros, nunc. Et ut pellentesque lorem orci nullam. Tristique sodales congue
              bibendum a semper
              pellentesque laoreet. Ac justo, eu vitae etiam risus, habitant risus aliquet tincidunt.</span>

            <span class="mb-5 block">Lorem ipsum dolor sit amet, consectetur adipiscing elit. Augue tempor sem volutpat pretium
              vehicula enim, ac neque. Scelerisque duis orci
              ultricies viverra tellus ut. Sem orci nunc tortor est amet nisi, mi integer. Nam nulla malesuada turpis vitae sed
              egestas tempor venenatis
              ultrices. Vestibulum, pellentesque et eros, nunc. Et ut pellentesque lorem orci nullam. Tristique sodales congue
              bibendum a semper
              pellentesque laoreet. Ac justo, eu vitae etiam risus, habitant risus aliquet tincidunt.</span>
            <span class="mb-5 block">Lorem ipsum dolor sit amet, consectetur adipiscing elit. Augue tempor sem volutpat pretium
              vehicula enim, ac neque. Scelerisque duis orci
              ultricies viverra tellus ut. Sem orci nunc tortor est amet nisi, mi integer. Nam nulla malesuada turpis vitae sed
              egestas tempor venenatis
              ultrices. Vestibulum, pellentesque et eros, nunc. Et ut pellentesque lorem orci nullam. Tristique sodales congue
              bibendum a semper
              pellentesque laoreet. Ac justo, eu vitae etiam risus, habitant risus aliquet tincidunt.</span>
          </p>
        </div>
      </div>
      <div class="flex flex-wrap rounded-2xl bg-primary p-0">
        <div class="m-0 w-full p-0 h-80 md:w-[50%]">
          <iframe
            src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d15844.811589872557!2d106.805509!3d-6.86627295!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x2e6833e549b1806d%3A0x1bfc2d98da226679!2sNagrak%20Sel.%2C%20Kec.%20Nagrak%2C%20Kabupaten%20Sukabumi%2C%20Jawa%20Barat!5e0!3m2!1sid!2sid!4v1684195782133!5m2!1sid!2sid"
            class="mb-10 w-full rounded-t-2xl md:rounded-tr-none p-0 md:m-0 md:rounded-l-2xl" height="100%" style="border: 0"
            allowfullscreen="" loading="lazy" referrerpolicy="no-referrer-when-downgrade"></iframe>
        </div>
        <div class="flex mt-5 w-full flex-col items-center justify-center px-4 md:w-[50%]">
          <h3 class="mb-2 text-xl font-semibold text-white">Desa Nagrak Selatan</h3>
          <ul class="text-slate-300">
            <li>
              <a href="https://goo.gl/maps/YueedGvrsA1oG4Tg8" class="mb-3 inline-block text-base hover:text-slate-400"><i
                  class="fa-solid fa-location-dot"></i> Jl. Surya kencana no 10 Kec, nagrak Kab, Sukabumi 43356</a>
            </li>
            <li>
              <a href="tel:+62234567890" class="mb-3 inline-block text-base hover:text-slate-400"><i
                  class="fa-solid fa-phone"></i>
                +622 345 67890</a>
            </li>
            <li>
              <a href="mailto:desanagrakselatan@gmail.com" class="mb-3 inline-block text-base hover:text-slate-400"><i
                  class="fa-solid fa-envelope"></i> desanagrakselatan@gmail.com</a>
            </li>
          </ul>
        </div>
      </div>
    </div>

    {{-- Akhir Profile --}}

    {{-- Perangkat --}}
    <div class="container perangkatDesa flex-wrap hidden flex-col" id="perangkat-desa">
      <div class="w-full flex justify-center">

        @if ($perangkat->count())
        <a href="#"
          class="w-full bg-white my-5 flex flex-col items-center border border-gray-200 rounded-lg shadow md:flex-row md:max-w-xl hover:bg-gray-100 dark:border-gray-700 dark:bg-gray-800 dark:hover:bg-gray-700">
          <img class="object-cover w-full rounded-t-lg h-96 md:h-auto md:w-48 md:rounded-none md:rounded-l-lg"
            src="{{ asset('storage/' . $perangkat[0]->image) }}" alt="">
          <div class="flex flex-col justify-between p-4 leading-normal">
            <h5 class="mb-2 text-2xl font-bold tracking-tight text-gray-900 dark:text-white">{{ $perangkat[0]->nama_lengkap }}
            </h5>
            <p class="mb-3 font-normal text-gray-700 dark:text-gray-400">
            <ul>
              <li>Tempat, Tanggal Lahir : {{ $perangkat[0]->tanggal_lahir }}</li>
              <li>JABATAN : {{ $perangkat[0]->jabaran }}</li>
              <li>Alamat : {{ $perangkat[0]->alamat }}</li>
            </ul>
            </p>
          </div>
        </a>
      </div>
      <div class="flex flex-wrap justify-center gap-10">

        @foreach ($perangkat->skip(1) as $item)


        <a href="#"
          class="w-full lg:w-1/2 my-5 flex flex-col items-center bg-white border border-gray-200 rounded-lg shadow md:flex-row md:max-w-xl hover:bg-gray-100 dark:border-gray-700 dark:bg-gray-800 dark:hover:bg-gray-700">
          <img class="object-cover w-full rounded-t-lg h-96 md:h-auto md:w-48 md:rounded-none md:rounded-l-lg"
            src="{{ asset('storage/' . $item->image) }}" alt="">
          <div class="flex flex-col justify-between p-4 leading-normal">
            <h5 class="mb-2 text-2xl font-bold tracking-tight text-gray-900 dark:text-white">{{ $item->nama_lengkap }}</h5>
            <p class="mb-3 font-normal text-gray-700 dark:text-gray-400">
            <ul>
              <li>Tempat, Tanggal Lahir : {{ $item->tanggal_lahir }}</li>
              <li>JABATAN : {{ $item->jabaran }}</li>
              <li>Alamat : {{ $item->alamat }}</li>
            </ul>
            </p>
          </div>
        </a>

        @endforeach
      </div>
      @else
      <p class="text-center text-lg">No Post Found</p>
      @endif

    </div>
    {{-- Akhir Perangkat --}}

    {{-- Lembaga --}}

    <div class="container lembagaDesa my-10 hidden flex-col" id="lembaga-desa">
      <div class="text-lg my-5" id="bpd">
        <h1 class="text-3xl bold text-center">BPD</h1>
        <ul class="text-justify">
          <li>Keberadaan Badan Permusyawaratan Desa (BPD) semakin dikuatkan sebagai lembaga permusyawaratan di tingkat Desa.
            Penguatan BPD merupakan amanah dari UU Desa.

            <span>Secara yuridis, tugas Badan Permusyawaratan Desa mengacu kepada regulasi desa yakni Undang-Undang Nomor 6
              Tahun
              2014 tentang Desa.</span>
            <span>
              Badan Permusyawaratan Desa atau yang disebut dengan nama lain adalah lembaga yang melaksanakan fungsi pemerintahan
              yang anggotanya merupakan wakil dari penduduk Desa berdasarkan keterwakilan wilayah dan ditetapkan secara
              demokratis.</span>
            <span>
              Dalam upaya meningkatkan kinerja kelembagaan di tingkat Desa, memperkuat kebersamaan, serta meningkatkan
              partisipasi dan pemberdayaan masyarakat, Pemerintah Desa dan Badan Permusyawaratan Desa memfasilitasi
              penyelenggaraan Musyawarah desa.</span>
            <span>
              Pemilihan anggota BPD dilakukan secara demokratis, yakni dipilih dari dan oleh penduduk desa yang memenuhi
              persyaratan calon anggota BPD.</span>
            <span>
              Dalam Permendagri No.110/2016 Badan Permusyawaratan Desa mempunyai fungsi, membahas dan menyepakati Rancangan
              Peraturan Desa bersama Kepala Desa, menampung dan menyalurkan aspirasi masyarakat Desa, dan melakukan pengawasan
              kinerja Kepala Desa.</span>
            <span>
              Selain melaksanakan fungsi diatas, Badan Permusyawaratan Desa juga mempunyai tugas sebagai berikut.</span>
          </li>
          <li class="my-5"><span class="block">Tugas Badan Permusyawaratan Desa:</span>
            <ol class="list-disc list-inside">
    <li>
        <span>Menggali aspirasi masyarakat;</span>
    </li>
    <li>
        <span>Menampung aspirasi masyarakat;</span>
    </li>
    <li>
        <span>Mengelola aspirasi masyarakat;</span>
    </li>
    <li>
        <span>Menyalurkan aspirasi masyarakat;</span>
    </li>
    <li>
        <span>Menyelenggarakan musyawarah BPD;</span>
    </li>
    <li>
        <span>Menyelenggarakan musyawarah Desa;</span>
    </li>
    <li>
        <span>Membentuk panitia pemilihan Kepala Desa;</span>
    </li>
    <li>
        <span>Menyelenggarakan musyawarah Desa khusus untuk pemilihan Kepala Desa antarwaktu;</span>
    </li>
    <li>
        <span>Membahas dan menyepakati rancangan Peraturan Desa bersama Kepala Desa;</span>
    </li>
    <li>
        <span>Melaksanakan pengawasan terhadap kinerja Kepala Desa;</span>
    </li>
    <li>
        <span>Melakukan evaluasi laporan keterangan penyelenggaraan Pemerintahan Desa;</span>
    </li>
    <li>
        <span>Menciptakan hubungan kerja yang harmonis dengan Pemerintah Desa dan lembaga Desa lainnya; dan melaksanakan
            tugas</span>
    </li>
    <li>
        <span>lain yang diatur dalam ketentuan peraturan perundang-undangan.</span>
    </li>
</ol>

          </li>
          <li class="my-5 flex justify-center flex-col"><span class="block text-center">DAFTAR ANGGOTA BPD NAGRAK SELATAN</span>
           <div style="overflow-x: auto;">
                <table class="border-collapse border ">
    <thead>
        <tr>
            <th class="border border-gray-500 px-4 py-2">NO</th>
            <th class="border border-gray-500 px-4 py-2">NAMA</th>
            <th class="border border-gray-500 px-4 py-2">JABATAN</th>
            <th class="border border-gray-500 px-4 py-2">KETERANGAN</th>
        </tr>
    </thead>
    <tbody>
        <tr>
            <td class="border border-gray-500 px-4 py-2">1</td>
            <td class="border border-gray-500 px-4 py-2">Drs. MUSTOPA KAMAL</td>
            <td class="border border-gray-500 px-4 py-2">Ketua</td>
            <td class="border border-gray-500 px-4 py-2"></td>
        </tr>
        <tr>
            <td class="border border-gray-500 px-4 py-2">2</td>
            <td class="border border-gray-500 px-4 py-2">NANO DJUANDA</td>
            <td class="border border-gray-500 px-4 py-2">Wakil Ketua</td>
            <td class="border border-gray-500 px-4 py-2"></td>
        </tr>
        <tr>
            <td class="border border-gray-500 px-4 py-2">3</td>
            <td class="border border-gray-500 px-4 py-2">SANDY JAKA ANGGARA, S.IP</td>
            <td class="border border-gray-500 px-4 py-2">Sekretaris</td>
            <td class="border border-gray-500 px-4 py-2"></td>
        </tr>
        <tr>
            <td class="border border-gray-500 px-4 py-2">4</td>
            <td class="border border-gray-500 px-4 py-2">HERMAN, S.HI</td>
            <td class="border border-gray-500 px-4 py-2">Anggota</td>
            <td class="border border-gray-500 px-4 py-2"></td>
        </tr>
        <tr>
            <td class="border border-gray-500 px-4 py-2">5</td>
            <td class="border border-gray-500 px-4 py-2">NANANG, S.Pd. M.Si.</td>
            <td class="border border-gray-500 px-4 py-2">Anggota</td>
            <td class="border border-gray-500 px-4 py-2"></td>
        </tr>
        <tr>
            <td class="border border-gray-500 px-4 py-2">6</td>
            <td class="border border-gray-500 px-4 py-2">Drs. MAMAT ROSIDIN, M.Pd.</td>
            <td class="border border-gray-500 px-4 py-2">Anggota</td>
            <td class="border border-gray-500 px-4 py-2"></td>
        </tr>
             <tr>
            <td class="border border-gray-500 px-4 py-2">7</td>
            <td class="border border-gray-500 px-4 py-2">ARIES BUDI SETIAWAN, S.Ag.</td>
            <td class="border border-gray-500 px-4 py-2">Anggota</td>
            <td class="border border-gray-500 px-4 py-2"></td>
        </tr>
        <tr>
            <td class="border border-gray-500 px-4 py-2">8</td>
            <td class="border border-gray-500 px-4 py-2">KANDA SUKANDA</td>
            <td class="border border-gray-500 px-4 py-2">Anggota</td>
            <td class="border border-gray-500 px-4 py-2"></td>
        </tr>
        <tr>
            <td class="border border-gray-500 px-4 py-2">9</td>
            <td class="border border-gray-500 px-4 py-2">HERI SUHERI</td>
            <td class="border border-gray-500 px-4 py-2">Anggota</td>
            <td class="border border-gray-500 px-4 py-2"></td>
        </tr>
        <tr>
            <td class="border border-gray-500 px-4 py-2">10</td>
            <td class="border border-gray-500 px-4 py-2">YADI IRWANSYAH</td>
            <td class="border border-gray-500 px-4 py-2">Anggota</td>
            <td class="border border-gray-500 px-4 py-2"></td>
        </tr>
        <tr>
            <td class="border border-gray-500 px-4 py-2">11</td>
            <td class="border border-gray-500 px-4 py-2">EMI SUHAEMI</td>
            <td class="border border-gray-500 px-4 py-2">Anggota</td>
            <td class="border border-gray-500 px-4 py-2"></td>
        </tr>
    </tbody>
</table>
            </div>


          </li>
        </ul>
      </div>
      <div class="text-lg my-5" id="lpm">
        <h1 class="text-3xl bold text-center">LPM</h1>
        <ul>
          <li class="my-5 text-center">DAFTAR PENGURUS LEMBAGA PEMBERDAYAAN MASYARAKAT DESA NAGRAK SELATAN</li>
          <li class="my-5">
            <div class="relative overflow-x-auto shadow-md sm:rounded-lg">
              <table class="w-full text-sm text-left text-gray-500 dark:text-gray-400">
                <thead class=" text-gray-700 uppercase bg-gray-50 dark:bg-gray-700 dark:text-gray-400">
                  <tr>
                    <th scope="col" class="px-6 py-3">
                      KETUA :
                    </th>
                    <th scope="col" class="px-6 py-3" colspan="4">
                      UJANG MULYADI, S.Hut.
                    </th>

                  </tr>
                </thead>
                <tbody>
                  <tr class="bg-white border-b dark:bg-gray-900 dark:border-gray-700">
                    <th scope="row" class="px-6 py-4 font-medium text-gray-900 whitespace-nowrap dark:text-white">
                      ANGGOTA :
                    </th>
                    <td class="px-6 py-4">
                      AYI JALALUDIN
                    </td>
                    <td class="px-6 py-4">
                      USEP RIANA
                    </td>
                    <td class="px-6 py-4">
                      ETTY SRI MULYATIE
                    </td>
                    <td class="px-6 py-4">
                      LINA HERLINA
                    </td>
                  </tr>

                </tbody>
              </table>
            </div>
          </li>
        </ul>
      </div>
      <div class="text-lg my-5" id="RT/RW">
        <h1 class="text-3xl bold text-center">RT / RW</h1>
        <ul class="text-justify">
          <li class="my-5">Sesuai dengan Permendagri Nomor 05 Tahun 2007 tentang Pedoman Penataan Lembaga Kemasyarakatan, dijelaskan bahwa RT
            dan RW mempunyai tugas untuk membantu Pemerintahan Desa dan Lurah dalam penyelenggaraan urusan pemerintahan. Adapun
            dalam melaksanakan tugasnya RT dan RW mempunyai fungsi :
            <span class="block">- Pendataan kependudukan dan pelayanan administrasi pemerintahan lainnya.</span>
            <span class="block">- Pemeliharaan keamanan, ketertiban dan kerukunan hidup antar warga;</span>
            <span class="block">- Pembuatan gagasan dalam pelaksanaan pembangunan dengan mengembangkan aspirasi dan swadaya murni
              masyarakat;</span>
            <span class="block">Penggerak swadaya gotong royong dan partisipasi masyarakat di wilayah</span>
          </li>
          <li class="my-10 text-center text-xl bold">RT</li>
          <li>
            <div class="relative overflow-x-auto shadow-md sm:rounded-lg">
              <table class="w-full text-sm text-left text-gray-500 dark:text-gray-400">
                <thead class="text-xs text-gray-700 uppercase bg-gray-50 dark:bg-gray-700 dark:text-gray-400">
                  <tr>
                    <th scope="col" class="px-6 py-3">
                      No
                    </th>
                    <th scope="col" class="px-6 py-3">
                      Nama
                    </th>
                    <th scope="col" class="px-6 py-3">
                      Jabatan
                    </th>
                    <th scope="col" class="px-6 py-3">
                      Keterangan
                    </th>
                  </tr>
                </thead>
                <tbody>
                  <tr class="bg-white border-b dark:bg-gray-900 dark:border-gray-700">
                    <th scope="row" class="px-6 py-4 font-medium text-gray-900 whitespace-nowrap dark:text-white">
                      1
                    </th>
                    <td class="px-6 py-4">
                      M. KAMAL
                    </td>
                    <td class="px-6 py-4">
                      Ketua RW. 01
                    </td>
                    <td class="px-6 py-4">

                    </td>
                  </tr>
                  <tr class="border-b bg-gray-50 dark:bg-gray-800 dark:border-gray-700">
                    <th scope="row" class="px-6 py-4 font-medium text-gray-900 whitespace-nowrap dark:text-white">
                      2
                    </th>
                    <td class="px-6 py-4">
                      AYI JALALUDIN
                    </td>
                    <td class="px-6 py-4">
                      Ketua RW. 02
                    </td>
                    <td class="px-6 py-4">

                    </td>
                  </tr>
                  <tr class="bg-white border-b dark:bg-gray-900 dark:border-gray-700">
                    <th scope="row" class="px-6 py-4 font-medium text-gray-900 whitespace-nowrap dark:text-white">
                      3
                    </th>
                    <td class="px-6 py-4">
                      AYI SUGIHARTO
                    </td>
                    <td class="px-6 py-4">
                      Ketua RW. 03
                    </td>
                    <td class="px-6 py-4">

                    </td>
                  </tr>
                  <tr class="border-b bg-gray-50 dark:bg-gray-800 dark:border-gray-700">
                    <th scope="row" class="px-6 py-4 font-medium text-gray-900 whitespace-nowrap dark:text-white">
                      4
                    </th>
                    <td class="px-6 py-4">
                      DUDIN HASANUDIN
                    </td>
                    <td class="px-6 py-4">
                      Ketua RW. 04
                    </td>
                    <td class="px-6 py-4">

                    </td>
                  </tr>
                  <tr class="bg-white border-b dark:bg-gray-900 dark:border-gray-700">
                    <th scope="row" class="px-6 py-4 font-medium text-gray-900 whitespace-nowrap dark:text-white">
                      5
                    </th>
                    <td class="px-6 py-4">
                      SOMANTRI
                    </td>
                    <td class="px-6 py-4">
                      Ketua RW. 05
                    </td>
                    <td class="px-6 py-4">

                    </td>
                  </tr>
                  <tr class="border-b bg-gray-50 dark:bg-gray-800 dark:border-gray-700">
                    <th scope="row" class="px-6 py-4 font-medium text-gray-900 whitespace-nowrap dark:text-white">
                      6
                    </th>
                    <td class="px-6 py-4">
                      IRMAWAN
                    </td>
                    <td class="px-6 py-4">
                      Ketua RW. 06
                    </td>
                    <td class="px-6 py-4">

                    </td>
                  </tr>
                  <tr class="bg-white border-b dark:bg-gray-900 dark:border-gray-700">
                    <th scope="row" class="px-6 py-4 font-medium text-gray-900 whitespace-nowrap dark:text-white">
                      7
                    </th>
                    <td class="px-6 py-4">
                      SUPARDI
                    </td>
                    <td class="px-6 py-4">
                      Ketua RW. 07
                    </td>
                    <td class="px-6 py-4">

                    </td>
                  </tr>
                  <tr class="border-b bg-gray-50 dark:bg-gray-800 dark:border-gray-700">
                    <th scope="row" class="px-6 py-4 font-medium text-gray-900 whitespace-nowrap dark:text-white">
                      7
                    </th>
                    <td class="px-6 py-4">
                      JAJANG
                    </td>
                    <td class="px-6 py-4">
                      Ketua RW. 08
                    </td>
                    <td class="px-6 py-4">

                    </td>
                  </tr>
                </tbody>
              </table>
            </div>

          </li>
          <li class="my-10 text-center text-xl bold">RW</li>
          <li>
            @php
            $data = [
            ['E. KOSASIH', 'KETUA 01/01', ''],
            ['ADE PURNAMA', 'KETUA 02/01', ''],
            ['MOCH. ERWIN M. S.Pd.', 'KETUA 03/01', ''],
            ['SARHINDI', 'KETUA 04/01', ''],
            ['M. SHOLEH ZAINI', 'KETUA 01/02', ''],
            ['UJANG HUJAEMAH', 'KETUA 02/02', ''],
            ['FIRMAN HENDRADI', 'KETUA 03/02', ''],
            ['UJANG RUSTANDI', 'KETUA 04/02', ''],
            ['ROHMAN', 'KETUA 04/02', ''],
            ['GUNAWAN, S.Pd.', 'KETUA 04/02', ''],
            ['ADITIYA', 'KETUA 01/03', ''],
            ['WAWAN SETIAWAN', 'KETUA 02/03', ''],
            ['UNTUNG', 'KETUA 03/03', ''],
            ['MULYATI', 'KETUA 04/03', ''],
            ['TATANG SOMANTRI', 'KETUA 01/04', ''],
            ['YANA MULYANA', 'KETUA 02/04', ''],
            ['SUKAESIH', 'KETUA 03/04', ''],
            ['UBING SAEPUDIN', 'KETUA 04/04', ''],
            ['ANDRE', 'KETUA 01/05', ''],
            ['DADANG SUKMAWIJAYA', 'KETUA 02/05', ''],
            ['TAUFIQ HM', 'KETUA 03/05', ''],
            ['SAJUPRI', 'KETUA 04/05', ''],
            ['UJANG RAHMAT', 'KETUA 01/06', ''],
            ['ADE WAHYUDI', 'KETUA 02/06', ''],
            ['DANU MIHARJA', 'KETUA 03/06', ''],
            ['OHI', 'KETUA 01/07', ''],
            ['HERI SUHAERI', 'KETUA 02/07', ''],
            ['ENJANG SUHENDI', 'KETUA 03/07', ''],
            ['UJANG BADRIAMAN', 'KETUA 04/07', ''],
            ['YOGI SURYA MUGIA', 'KETUA 04/07', ''],
            ['DJAMALUDIN', 'KETUA 01/08', ''],
            ['PEPEN SUPENDI', 'KETUA 02/08'],
            ['ADNA WIJAYA', 'KETUA 03/08'],
            ['UJANG ISKANDAR', 'KETUA 04/08']]
            @endphp
            <div class="relative overflow-x-auto shadow-md sm:rounded-lg">
              <table class="w-full text-sm text-left text-gray-500 dark:text-gray-400">
                <thead class="text-xs text-gray-700 uppercase bg-gray-50 dark:bg-gray-700 dark:text-gray-400">
                  <tr>
                    <th scope="col" class="px-6 py-3">
                      No
                    </th>
                    <th scope="col" class="px-6 py-3">
                      Nama
                    </th>
                    <th scope="col" class="px-6 py-3">
                      Jabatan
                    </th>
                    <th scope="col" class="px-6 py-3">
                      Keterangan
                    </th>
                  </tr>
                </thead>
                <tbody>
                  @foreach ($data as $index => $row)
                  <tr
                    class=" {{ $index % 2 == 0 ? 'bg-white border-b dark:bg-gray-900 dark:border-gray-700' : 'border-b bg-gray-50 dark:bg-gray-800 dark:border-gray-700' }}">
                    <th scope="row" class="px-6 py-4 font-medium text-gray-900 whitespace-nowrap dark:text-white">
                      {{ $loop->iteration }}
                    </th>
                    @foreach ($row as $cell)

                    <td class="px-6 py-4">{{ $cell }}</td>
                    @endforeach
                  </tr>
                  @endforeach

                </tbody>
              </table>
            </div>
          </li>
        </ul>
      </div>

      <div class="text-lg my-5" id="pkk">
        <h1 class="text-3xl bold text-center">PKK</h1>
        <ul class="text-justify">
          <li class="my-5">Tim Penggerak Pemberdayaan dan Kesejahteraan Keluarga Desa, atau sering disebut dengan TP PKK Desa adalah lembaga
            kemasyarakatan sebagai mitra kerja pemerintah dan organisasi kemasyarakatan lainnya, yang berfungsi sebagai
            fasilitator, perencana, pelaksana, pengendali dan penggerak pada masing-masing jenjang pemerintahan untuk
            terlaksananya program PKK.Tim Penggerak PKK Desa/Kelurahan mempunyai tugas membantu Pemerintah Desa/Lurah dan
            merupakan mitra dalam pemberdayaan dan peningkatan kesejahteraan keluarga.</li>
          <li class="my-5 bold">
            Tugas Tim Penggerak PKK Desa/Kelurahan meliputi :
          </li>
          <li>
            <ol class="list-disc list-inside">
              <li>Menyusun rencana kerja PKK Desa/Kelurahan, sesuai dengan basil Rakerda Kabupaten/Kota</li>
              <li>Melaksanakan kegiatan sesuai jadwal yang disepakati</li>
              <li>Menyuluh dan menggerakkan kelompok-kelompok PKK Dusun/Lingkungan, RW, RT, dan dasa wisma agar dapat mewujudkan
                kegiatan-kegiatan yang telah disusun dan disepakati</li>
              <li>Menggali, menggerakan, dan mengembangkan potensi masyarakat, khususnya keluarga untuk meningkatkan
                kesejahteraan keluarga sesuai dengan kebijaksanaan yang telah ditetapkan</li>
              <li>Melaksanakan kegiatan penyuluhan kepada keluarga-keluarga yang mencakup kegiatan bimbingan dan motivasi dalam
                upaya mencapai keluarga sejahtera</li>
              <li>Mengadakan pembinaan dan bimbingan mengenai pelaksanaan program kerja</li>
              <li>Berpartisipasi dalam pelaksanaan program instansi yang berkaitan dengan kesejahteraan keluarga di
                desa/kelurahan</li>
              <li>Membuat laporan basil kegiatan kepada Tim Penggerak PKK Kecamatan dengan tembusan kepada Ketua Dewan Penyantun
                Tim Penggerak PKK setempat</li>
              <li>Melaksanakan tertib administrasi</li>
              <li>Mengadakan konsultasi dengan Ketua Dewan Penyantun Tim Penggerak PKK setempat</li>
            </ol>
          </li>
          <li class="my-5 bold">Tim Penggerak PKK Desa/Kelurahan dalam melaksanakan tugas mempunyai fungsi :</li>
          <li>
            <ol class="list-disc list-inside">
              <li>penyuluh, motivator dan penggerak masyarakat agar mau dan mampu melaksanakan program PKK; dan</li>
              <li>
                fasilitator, perencana, pelaksana, pengendali, pembina dan pembimbing Gerakan PKK.</li>
            </ol>
          </li>
          <li class="my-5">
            <table class="min-w-full">
              <thead>
                <tr>
                  <th class="px-6 py-3 bg-gray-200 text-left text-sm font-semibold uppercase">Posisi</th>
                  <th class="px-6 py-3 bg-gray-200 text-left text-sm font-semibold uppercase">Nama</th>
                </tr>
              </thead>
              <tbody>
                <tr class="bg-white border-b dark:bg-gray-900 dark:border-gray-700">
                  <td class="px-6 py-4">Ketua</td>
                  <td class="px-6 py-4">Lina Herlina</td>
                </tr>
                <tr class="border-b bg-gray-50 dark:bg-gray-800 dark:border-gray-700">
                  <td class="px-6 py-4">Sekretaris</td>
                  <td class="px-6 py-4">Etty Sri Mulyatie</td>
                </tr>
                <tr class="bg-white border-b dark:bg-gray-900 dark:border-gray-700">
                  <td class="px-6 py-4">Bendahara</td>
                  <td class="px-6 py-4">Yeti Suyeti</td>
                </tr>
                <tr class="border-b bg-gray-50 dark:bg-gray-800 dark:border-gray-700">
                  <td class="px-6 py-4">Ketua Pokja I</td>
                  <td class="px-6 py-4">Dedah Subaedah</td>
                </tr>
                <tr class="bg-white border-b dark:bg-gray-900 dark:border-gray-700">
                  <td class="px-6 py-4">Ketua Pokja II</td>
                  <td class="px-6 py-4">Euis Ramlah</td>
                </tr>
                <tr class="border-b bg-gray-50 dark:bg-gray-800 dark:border-gray-700">
                  <td class="px-6 py-4">Ketua Pokja III</td>
                  <td class="px-6 py-4">Euis Masripah</td>
                </tr>
                <tr class="bg-white border-b dark:bg-gray-900 dark:border-gray-700">
                  <td class="px-6 py-4">Ketua Pokja IV</td>
                  <td class="px-6 py-4">Aan Sri Mulyani</td>
                </tr>
              </tbody>
            </table>
          </li>
        </ul>
      </div>

      <div class="text-lg my-5" id="KarangTaruna">
        <h1 class="text-3xl bold text-center">Karang Taruna</h1>
        <ul class="text-justify">
          <li class="my-5">Karang Taruna Karang Taruna merupakan wadah pengembangan generasi muda nonpartisan, yang tumbuh atas
            dasar kesadaran
            dan rasa tanggung jawab sosial dari, oleh dan untuk masyarakat khususnya generasi muda di wilayah Desa / Kelurahan
            atau komunitas sosial sederajat, yang terutama bergerak dibidang kesejahteraan sosial. Sebagai organisasi sosial
            kepemudaan Karang Taruna merupakan wadah pembinaan dan pengembangan serta pemberdayaan generasi muda dalam upaya
            mengembangkan kegiatan Pelayanan Kesejahteraan Sosial dan usaha ekonomis produktif dengan pendayagunaan semua potensi
            yang tersedia dilingkungan baik sumber daya manusia maupun sumber daya alam yang telah ada. Sebagai organisasi
            kepemudaan, Karang Taruna berpedoman pada Pedoman Dasar dan Pedoman Rumah Tangga (PD/PRT) di mana telah pula diatur
            tentang struktur penggurus dan masa jabatan dimasing-masing wilayah mulai dari Desa / Kelurahan sampai pada tingkat
            Nasional. Semua ini wujud daripada regenerasi organisasi demi kelanjutan organisasi serta pembinaan anggota Karang
            Taruna baik dimasa sekarang maupun masa yang akan datang.</li>
          <li class="my-5">
            Karang Taruna beranggotakan seluruh Generasi Muda mulai dari usia 13 – 45 tahun yang selanjutnya disebut sebagai Warga
            Karang Taruna (WKT) dan batasan sebagai Pengurus Karang Taruna adalah yang berusia 17 – 45 tahun.
          </li>
          <li class="my-5">Karang Taruna didirikan dengan tujuan memberikan pembinaan dan pemberdayaan kepada para generasi muda,
            misalnya
            dalam bidang keorganisasian, ekonomi, olahraga, ketrampilan, advokasi, keagamaan dan kesenian.</li>
          <li class="my-5">
            <ol class="list-decimal ml-6">
              <p class="text-center text-lg bold uppercase">Tujuan Karang Taruna</p>
              <li>Terwujudnya pertumbuhan dan perkembangan kesadaran tanggung jawab sosial setiap generasi muda warga Karang
                Taruna dalam mencegah, menangkal, menanggulangi dan mengantisipasi berbagai masalah sosial.</li>
              <li>Terbentuknya jiwa dan semangat kejuangan generasi muda warga Karang Taruna yang trampil dan berkepribadian serta
                berpengetahuan.</li>
              <li>Tumbuhnya potensi dan kemampuan generasi muda dalam rangka mengembangkan keberdayaan warga Karang Taruna.</li>
              <li>Termotivasinya setiap generasi muda Karang Taruna untuk mampu menjalin toleransi dan menjadi perekat persatuan
                dalam keberagaman kehidupan bermasyarakat, berbangsa, dan bernegara.</li>
              <li>Terjalinnya kerjasama antara generasi muda warga Karang Taruna dalam rangka mewujudkan taraf kesejahteraan
                sosial bagi masyarakat.</li>
              <li>Terwujudnya kesejahteraan sosial yang semakin meningkat bagi generasi muda di desa/kelurahan atau komunitas adat
                sederajat yang memungkinkan pelaksanaan fungsi sosialnya sebagai manusia pembangunan yang mampu mengatasi masalah
                kesejahteraan sosial dilingkungannya.</li>
              <li>Terwujudnya pembangunan kesejahteraan sosial generasi muda di desa/kelurahan atau komunitas adat sederajat yang
                dilaksanakan secara komprehensif, terpadu, dan terarah serta berkesinambungan oleh Karang Taruna bersama
                pemerintah dan komponen masyarakat lainnya.</li>
            </ol>
          </li>
          <li class="my-5"><span class="block text-center text-lg bold uppercase">Tugas Pokok Karang Taruna </span>Setiap Karang
            Taruna mempunyai
            tugas pokok secara
            bersama-sama dengan
            Pemerintah dan komponen masyarakat lainnya untuk menanggulangi berbagai masalah kesejahteraan social terutama yang
            dihadapi generasi muda, baik yang bersifat preventif, rehabilitatif maupun pengembangan potensi generasi muda di
            lingkungannya.</li>
          <li class="my-5">
            <ol class="list-decimal ml-6">
              <p class="text-center text-lg bold uppercase">Fungsi Karang Taruna</p>
              <li>Penyelenggara Usaha Kesejahteraan Sosial.</li>
              <li>Penyelenggara Pendidikan dan Pelatihan bagi masyarakat.</li>
              <li>Penyelenggara pemberdayaan masyarakat terutama generasi muda secara komprehensif, terpacu dan terarah serta
                berkesinambungan.</li>
              <li>Penyelenggara kegiatan pengembangan jiwa kewirausahaan bagi generasi muda di lingkungannya.</li>
              <li>Penanaman pengertian, memupuk dan meningkatkan kesadaran tanggung jawab sosial generasi muda.</li>
              <li>Penumbuhan dan pengembangan semangat kebersamaan, jiwa kekeluargaan, kesetiakawanan sosial dan memperkuat
                nilai-nilai kearifan dalam bingkai Negara Kesatuan Republik Indonesia.</li>
              <li>Pemupukan kreatifitas generasi muda untuk dapat mengembangkan tanggung jawab sosial yang bersifat rekreatif,
                kreatif, edukatif, ekonomis produktif dan kegiatan praktis lainnya dengan mendayagunakan segala sumber dan potensi
                kesejahteraan sosial di lingkungannya secara swadaya.</li>
              <li>Penyelenggara rujukan, pendampingan, dan advokasi sosial bagi penyandang masalah kesejahteraan sosial.</li>
              <li>Penguatan sistem jaringan komunikasi, kerjasama, informasi dan kemitraan dengan berbagai sektor lainnya.</li>
              <li>Penyelenggara Usaha pencegahan permasalahan sosial yang aktual.</li>
            </ol>
          </li>
          <li class="text-center my-5">SUSUNAN PENGURUS KARANG TARUNA MANDIRI DESA NAGRAK SELATAN</li>
          <li>
            <table class="border-collapse mx-auto w-full">
              <tr>
                <th class="border px-4 py-2">Jabatan</th>
                <th class="border px-4 py-2">Nama</th>
              </tr>
              <tr>
                <td class="border px-4 py-2">KETUA</td>
                <td class="border px-4 py-2">USEP RIANA</td>
              </tr>
              <tr>
                <td class="border px-4 py-2">WAKIL KETUA</td>
                <td class="border px-4 py-2">ADITYA WIJAYA</td>
              </tr>
              <tr>
                <td class="border px-4 py-2">SEKRETARIS</td>
                <td class="border px-4 py-2">MOH. ERWAN, S.Ag.</td>
              </tr>
              <tr>
                <td class="border px-4 py-2">BENDAHARA</td>
                <td class="border px-4 py-2">NELA SUSILAWATI</td>
              </tr>
            </table>
          </li>
        </ul>
      </div>
    </div>
  </div>
  {{-- Akhir Lembaga --}}
  </div>
</section>


<script>
function changeBackgroundColor(clickedDiv) {
  const div1 = document.querySelector('#profileDiv');
  const div2 = document.querySelector('#perangkatDiv');
  const div3 = document.querySelector('#lembagaDiv');
  const profileDesa = document.querySelector('#profile-desa');
  const perangkatDesa = document.querySelector('#perangkat-desa');
  const lembagaDesa = document.querySelector('#lembaga-desa');

  div1.classList.remove('bg-primary/75', 'bg-primary');
  div2.classList.remove('bg-primary/75', 'bg-primary');
  div3.classList.remove('bg-primary/75', 'bg-primary');

  profileDesa.classList.remove('hidden', 'flex');
  perangkatDesa.classList.remove('hidden', 'flex');
  lembagaDesa.classList.remove('hidden', 'flex');

  if (clickedDiv === 1) {
    div1.classList.add('bg-primary');
    div2.classList.add('bg-primary/75');
    div3.classList.add('bg-primary/75');
    profileDesa.classList.add('flex');
    perangkatDesa.classList.add('hidden');
    lembagaDesa.classList.add('hidden');
  } else if (clickedDiv === 2) {
    div1.classList.add('bg-primary/75');
    div2.classList.add('bg-primary');
    div3.classList.add('bg-primary/75');
    profileDesa.classList.add('hidden');
    perangkatDesa.classList.add('flex');
    lembagaDesa.classList.add('hidden');
  } else if (clickedDiv === 3) {
    div1.classList.add('bg-primary/75');
    div2.classList.add('bg-primary/75');
    div3.classList.add('bg-primary');
    profileDesa.classList.add('hidden');
    perangkatDesa.classList.add('hidden');
    lembagaDesa.classList.add('flex');
  }
}
</script>
<!-- About section end -->
@endsection