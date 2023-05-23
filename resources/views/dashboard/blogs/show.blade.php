<x-app-layout>
  <x-slot name="header">
    <div class="w-full flex justify-between items-center">
      <h2 class="font-semibold text-xl text-gray-800 leading-tight">
        {{ __('Informasi Desa Nagrak Selatan') }}
      </h2>
      <div class="p-6 text-gray-900 ">
        <li type="none"><a href="/dashboard/posts"
            class="bg-lime-500 hover:bg-lime-400 text-white font-bold py-2 px-4 border-b-4 border-lime-700 hover:border-lime-500 rounded"><i
              class="fa-solid fa-arrow-left"></i> Back To List</a></li>
      </div>
    </div>
  </x-slot>

  <div class="py-5">
    <div class="max-w-7xl mx-auto sm:px-6 lg:px-8">
      <div class="mt-10  overflow-hidden shadow-sm sm:rounded-lg">
        <!-- Hero section start -->
        <section class="" id="berita">
          <div class="container">
            <div class="flex flex-wrap justify-center">
              <div class="w-full lg:w-[70%] mb-10">
                <div class="relative h-80">
                  <p class="absolute z-10 bg-primary/50 text-white p-2 rounded-br-lg rounded-tl-lg">{{  $post->category->name }}</p>
                  @if ($post->image)
                      <img src="{{ asset('storage/' . $post->image) }}" alt="Programming" class="object-cover object-center w-full h-full rounded-xl overflow-hidden" />
                    @else

                    <img src="https://source.unsplash.com/500x500?programming" alt="Programming" class="object-cover object-center w-full h-full rounded-xl overflow-hidden" />
                  @endif
                </div>
              </div>
              <div class="w-full lg:w-[90%] mt-10 lg:mt-0 lg:px-20">
                <h2 class="text-2xl lg:text-5xl">{{ $post->title }}</h2>
                <h4 class="text-lg lg:text-lg"><i>Sabtu, 25 January 2023</i></h4>
                <hr class="h-px my-8 bg-third border-0">
                <p class="text-justify my-4">
                  {!! $post->body !!}
                </p>
              </div>

            </div>
            <hr class="h-px my-8 bg-third border-0">

          </div>
        </section>
        <!-- Hero section end -->
      </div>

    </div>
  </div>
</x-app-layout>