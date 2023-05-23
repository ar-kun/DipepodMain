@extends('layouts.main')
@section('content')
<!-- Hero section start -->
  <section class="bg-primary/50" style="background-image: url('{{ asset('asset/images/background.png') }}');">
   <div class="container pt-20 lg:pt-32">
    <div class="w-full">
     <div class="mx-auto mb-5 max-w-xl text-center">
      <h4 class="mb-2 text-lg font-semibold text-primary">Informasi Desa</h4>
      <p class="text-md font-medium text-secondary md:text-lg">“Be wise in receiving information”</p>
     </div>
    </div>

    <div class="flex flex-wrap justify-center">
     <div class="mb-5 w-3/4 self-center px-4 text-center">
      <form action="/blogs">
        @if (request('category')) 
         <input type="hidden" name="category" value="{{ request('category') }}" />
        @endif
       <label for="search" class="sr-only mb-2 text-sm font-medium text-gray-900 dark:text-white">Search</label>
       <div class="relative">
        <div class="pointer-events-none absolute inset-y-0 left-0 flex items-center pl-3">
         <svg
          aria-hidden="true"
          class="h-5 w-5 text-gray-500 dark:text-gray-400"
          fill="none"
          stroke="currentColor"
          viewBox="0 0 24 24"
          xmlns="http://www.w3.org/2000/svg"
         >
          <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M21 21l-6-6m2-5a7 7 0 11-14 0 7 7 0 0114 0z"></path>
         </svg>
        </div>
        <input
         type="search"
         id="search"
         name="search"
         class="block w-full rounded-3xl border border-gray-300 bg-gray-50 p-4 pl-10 text-sm text-gray-900 focus:border-blue-500 focus:ring-blue-500 dark:border-gray-600 dark:bg-gray-700 dark:text-white dark:placeholder-gray-400 dark:focus:border-blue-500 dark:focus:ring-blue-500"
         placeholder="Search"
         value="{{ request('search') }}"
        />
        <button
         type="submit"
         class="absolute right-10 hover:scale-125 bottom-2.5 origin-right rounded-lg bg-transparent px-4 py-2 text-sm font-medium text-dark transition-all duration-300 focus:outline-none focus:ring-4 focus:ring-blue-300"
        >
         Search
        </button>
       </div>
      </form>
     </div>
     <div class="mb-5 flex w-3/4 items-center justify-center lg:w-1/4">
      <a href="/blogs?category=berita"
       class="group relative mb-2 mr-2 inline-flex items-center justify-center overflow-hidden rounded-lg bg-gradient-to-br from-cyan-500 to-blue-500 p-0.5 text-sm font-medium text-gray-900 hover:text-white focus:outline-none focus:ring-4 focus:ring-cyan-200 group-hover:from-cyan-500 group-hover:to-blue-500 dark:text-white dark:focus:ring-cyan-800"
      >
       <span class="relative rounded-md bg-white px-5 py-2.5 transition-all duration-75 ease-in group-hover:bg-opacity-0 dark:bg-gray-900">
        Berita
       </span>
      </a>
      <a href="/blogs?category=agenda"
       class="group relative mb-2 mr-2 inline-flex items-center justify-center overflow-hidden rounded-lg bg-gradient-to-br from-cyan-500 to-blue-500 p-0.5 text-sm font-medium text-gray-900 hover:text-white focus:outline-none focus:ring-4 focus:ring-cyan-200 group-hover:from-cyan-500 group-hover:to-blue-500 dark:text-white dark:focus:ring-cyan-800"
      >
       <span class="relative rounded-md bg-white px-5 py-2.5 transition-all duration-75 ease-in group-hover:bg-opacity-0 dark:bg-gray-900">
        Agenda
       </span>
      </a>
     </div>
    </div>
   </div>
  </section>
  <!-- Hero section end -->
  <!-- Blog start -->
  <section id="blog" class="bg-slate-100 pt-16 pb-32">
   <div class="container">
    <div id="Blog">
     <div class="flex flex-wrap">

      @if ($posts->count())
          @foreach ($posts as $post)   
      <div class="w-full px-4 md:w-1/2 xl:w-1/3">
       <div class="group mb-10 h-60 overflow-hidden rounded-xl bg-white shadow-lg dark:bg-slate-700">
        <div class="relative">
          <p class="absolute z-10 bg-primary/50 text-white p-2 rounded-br-lg">{{ $post->category->name }}</p>
         <img src="{{ asset('storage/' . $post->image) }}" alt="Programming" class="absolute h-60 w-full" />
        </div>
        <div
         class="z-10 h-full origin-bottom scale-y-0 py-8 px-6 group-hover:relative group-hover:top-0 group-hover:flex group-hover:scale-y-100 group-hover:flex-col group-hover:bg-primary/50 group-hover:transition-all group-hover:duration-700"
        >
         <h3>
          <a href="" class="mb-3 block truncate text-xl font-semibold text-white dark:text-white">{{ $post->title }}</a>
         </h3>
         <p class="mb-4 text-base font-medium text-white">Lorem ipsum dolor sit amet consectetur adipisicing elit. Exercitationem, ex?</p>
         <a href="/blog/{{ $post->slug }}" class="rounded-md bg-white py-2 px-4 text-sm font-medium text-dark hover:opacity-80">Read More</a>
        </div>
       </div>
      </div>
      @endforeach
      @else
      <div class="flex justify-center">

        <p class="text-center text-lg">No post found.</p>
      </div>
      @endif

      
      
     </div>
     <div class="flex items-center justify-center">
      {{ $posts->links()  }}
     </div>
    </div>
   </div>
  </section>
  <!-- Blog end -->
@endsection