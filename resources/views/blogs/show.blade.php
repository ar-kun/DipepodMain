@extends('layouts.main')
@section('content')
  <!-- Hero section start -->
  <section class="bg-slate-300" id="berita">
   <div class="container pb-20 pt-20 lg:pt-32">
    <div class="flex flex-wrap">
     <div class="w-full lg:w-[30%]">
      <img src="{{ asset('storage/' . $post->image) }}" alt="" class="drop-shadow-2xl rounded-lg">
     </div>
     <div class="w-full lg:w-[70%] mt-10 lg:mt-0 lg:px-20">
      <h2 class="text-2xl lg:text-5xl">{{ $post->title }}</h2>
      <h4 class="text-lg lg:text-xl"><i>{{ date('d M Y, H:i', strtotime($post->created_at)) }}</i></h4>
      <hr class="h-px my-8 bg-third border-0">
      <p class="text-justify my-4">
        {!! $post->body !!}
      </p>
     </div>
     
    </div>
    <hr class="h-px my-8 bg-third border-0">
    <div class="flex flex-wrap">
      <h2 class="w-full text-center text-3xl mb-5">Informasi Terkait</h2>
      @foreach ($posts as $post)
  
    <div class="w-full px-4 md:w-1/2 xl:w-1/3">
       <div class="group mb-10 h-52 overflow-hidden rounded-xl bg-white shadow-lg dark:bg-slate-700">
        <div class="relative">
          <p class="absolute z-10 bg-primary/50 text-white p-2 rounded-br-lg">{{ $post->category->name }}</p>
         <img src="{{ asset('storage/' . $post->image) }}" alt="Programming" class="absolute h-52 w-full" />
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
    </div>
  </section>
  <!-- Hero section end -->
@endsection