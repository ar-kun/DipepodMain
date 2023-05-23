@extends('layouts.main')
@section('content')
<!-- Hero section start -->
<section class="h-screen bg-cover bg-center bg-no-repeat" id="home" style="background-image: url('{{ asset('asset/images/Hero.jpg') }}');>
   <div class=" container">
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
    <div class="-mt-56 flex justify-evenly">
      {{-- <div class=""> --}}
      <a href="/wisata"
        class="flex h-52 w-5/12 flex-col items-center justify-center rounded-2xl bg-primary text-white lg:w-1/4">
        <span class="text-8xl lg:text-9xl"><i class="fa-regular fa-images"></i></span>
        <span class="text-center text-xl">Wisata Lewiereng</span>
      </a>
      {{-- </div> --}}
      <a href="/umkm" class="flex h-52 w-5/12 flex-col items-center justify-center rounded-2xl bg-primary text-white lg:w-1/4">
        <span class="text-8xl lg:text-9xl"><i class="fa-solid fa-store"></i></span>
        <span class="text-center text-xl">UMKM Nagrak Selatan</span>
      </a>
    </div>
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

          Vitae nulla eget mattis semper eget elit neque neque. Tempor nulla viverra ante lobortis cursus eu condimentum in
          quis. Elementum enim
          dignissim volutpat integer molestie ullamcorper convallis donec. At scelerisque consectetur posuere ac sed phasellus.
          Arcu quam ipsum ridiculus
          lectus fringilla nibh eget tristique. Nunc eu malesuada eget aliquet ullamcorper. Diam velit convallis platea sed
          convallis mauris molestie fa
        </p>
        <div class="flex items-center">
          <a href="/about" type="button"
            class="mr-2 mb-2 rounded-full bg-third px-5 py-1.5 text-center text-sm font-medium text-white transition-all duration-500 hover:bg-primary focus:outline-none focus:ring-4 focus:ring-third">
            Selengkapnya
          </a>
        </div>
      </div>
    </div>
  </div>
</section>
<!-- About section end -->
<!-- Blog start -->
<section id="blog" class="bg-slate-100 pt-36 pb-32 dark:bg-slate-800">
  <div class="container">
    <div class="w-full px-4">
      <div class="mx-auto mb-16 max-w-xl text-center">
        <h4 class="mb-2 text-lg font-semibold text-primary">Blogs</h4>
        <p class="text-md font-medium text-secondary md:text-lg">Jangan Sampai Kelewatan Berita-Berita dan Informasi Terbaru
          Desa Nagrak Selatan!</p>
        <h2 class="mb-4 mt-16 text-3xl font-bold text-dark dark:text-white sm:text-4xl lg:text-5xl">Berita Terbaru & Agenda</h2>
      </div>
    </div>
    <div id="Berita">
      <div class="flex flex-wrap">
        @foreach ($posts as $post)
        
        <div class="w-full px-4 md:w-1/2 xl:w-1/3">
          <div class="group mb-10 h-52 overflow-hidden rounded-xl bg-white shadow-lg dark:bg-slate-700">
            <div class="relative">
              <p class="absolute z-10 bg-primary/50 text-white p-2 rounded-br-lg">{{ $post->category->name }}</p>
              <img src="{{ asset('storage/' . $post->image) }}" alt="Programming" class="absolute h-52 w-full" />
            </div>
            <div
              class="z-10 h-full origin-bottom scale-y-0 py-8 px-6 group-hover:relative group-hover:top-0 group-hover:flex group-hover:scale-y-100 group-hover:flex-col group-hover:bg-primary/50 group-hover:transition-all group-hover:duration-700">
              <h3>
                <a href="" class="mb-3 block truncate text-xl font-semibold text-white dark:text-white">{{ $post->title }}</a>
              </h3>
              <p class="mb-4 text-base font-medium text-white">Lorem ipsum dolor sit amet consectetur adipisicing elit.
                Exercitationem, ex?</p>
              <a href="/blog/{{ $post->slug }}"
                class="rounded-md bg-white py-2 px-4 text-sm font-medium text-dark hover:opacity-80">Read More</a>
            </div>
          </div>
        </div>
        



        @endforeach
      </div>
      <div class="flex items-center justify-center">
        <a href="/blogs"
          class="mr-2 mb-2 rounded-full bg-third px-5 py-1.5 text-center text-sm font-medium text-white transition-all duration-500 hover:bg-primary focus:outline-none focus:ring-4 focus:ring-third">
          Selengkapnya
        </a>
      </div>
    </div>
  </div>
</section>
<!-- Blog end -->
@endsection