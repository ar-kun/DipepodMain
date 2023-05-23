<x-app-layout>
  <x-slot name="header">
    <div class="w-full flex justify-center items-center">
      <h2 class="font-semibold text-xl text-gray-800 leading-tight">
        {{ __('Edit Informasi Desa Nagrak Selatan') }}
      </h2>
  </x-slot>

  <div class="py-5">
    <div class="max-w-7xl mx-auto sm:px-6 lg:px-8">
      <div class="mt-10 bg-white overflow-hidden shadow-sm sm:rounded-lg">
        <div class="p-10">     
          <form method="post" action="/dashboard/posts/{{ $post->slug }}" enctype="multipart/form-data">
            @method('put')
            @csrf
            <div class="relative z-0 w-full mb-6 group">
                <input type="text" name="title" id="title" class="block py-2.5 px-0 w-full text-sm text-gray-900 bg-transparent border-0 border-b-2 border-gray-300 appearance-none dark:text-white dark:border-gray-600 dark:focus:border-blue-500 focus:outline-none focus:ring-0 focus:border-blue-600 peer @error('title') is-invalid @enderror" placeholder=" " autofocus value="{{ old('title', $post->title) }}"/>
                <label for="title" class="peer-focus:font-medium absolute text-sm text-gray-500 dark:text-gray-400 duration-300 transform -translate-y-6 scale-75 top-3 -z-10 origin-[0] peer-focus:left-0 peer-focus:text-blue-600 peer-focus:dark:text-blue-500 peer-placeholder-shown:scale-100 peer-placeholder-shown:translate-y-0 peer-focus:scale-75 peer-focus:-translate-y-6 @error('title') is-invalid @enderror">Title</label>
                @error('title')
                    <p id="standard_error_help" class="mt-2 text-xs text-red-600 dark:text-red-400"><span class="font-medium">Oh, snapp!</span> {{ $message }}</p>
                @enderror
            </div>
            <div class="relative z-0 w-full mb-6 group hidden">
                <input type="text" name="slug" id="slug" class="block py-2.5 px-0 w-full text-sm text-gray-900 bg-transparent border-0 border-b-2 border-gray-300 appearance-none dark:text-white dark:border-gray-600 dark:focus:border-blue-500 focus:outline-none focus:ring-0 focus:border-blue-600 peer  @error('slug') is-invalid @enderror" placeholder=" " value="{{ old('slug', $post->slug) }}"/>
                <label for="slug" class="peer-focus:font-medium absolute text-sm text-gray-500 dark:text-gray-400 duration-300 transform -translate-y-6 scale-75 top-3 -z-10 origin-[0] peer-focus:left-0 peer-focus:text-blue-600 peer-focus:dark:text-blue-500 peer-placeholder-shown:scale-100 peer-placeholder-shown:translate-y-0 peer-focus:scale-75 peer-focus:-translate-y-6  @error('slug') is-invalid @enderror">Slug</label>
                @error('slug')
                    <p id="standard_error_help" class="mt-2 text-xs text-red-600 dark:text-red-400"><span class="font-medium">Oh, snapp!</span> {{ $message }}</p>
                @enderror
            </div>
            <div class="relative z-0 w-full mb-6 group">
                <label for="categoryPost" class="sr-only">Category</label>
                <select id="categoryPost" name="category_id" class="block py-2.5 px-0 w-full text-sm text-gray-500 bg-transparent border-0 border-b-2 border-gray-200 appearance-none dark:text-gray-400 dark:border-gray-700 focus:outline-none focus:ring-0 focus:border-gray-200 peer">
                  @foreach ($categories as $category)
                    @if(old('category_id', $post->category_id) == $category->id)
                      <option class="p-5" value="{{ $category->id }}" selected>{{ $category->name }}</option>
                    @else
                      <option class="p-5" value="{{ $category->id }}">{{ $category->name }}</option>
                    @endif
                  @endforeach
                </select>
            </div>

            <div class="flex mb-6 items-center justify-center w-full">
              <label for="image" class="relative overflow-hidden flex flex-col items-center justify-center w-full h-64 border-2 border-gray-300 border-dashed rounded-lg cursor-pointer bg-gray-50 dark:hover:bg-bray-800 dark:bg-gray-700 hover:bg-gray-100 dark:border-gray-600 dark:hover:border-gray-500 dark:hover:bg-gray-600 @error('image') is-invalid @enderror">
                <div class="flex flex-col items-center justify-center pt-5 pb-6">
                  <svg aria-hidden="true" class="w-10 h-10 mb-3 text-gray-400" fill="none" stroke="currentColor" viewBox="0 0 24 24" xmlns="http://www.w3.org/2000/svg"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M7 16a4 4 0 01-.88-7.903A5 5 0 1115.9 6L16 6a5 5 0 011 9.9M15 13l-3-3m0 0l-3 3m3-3v12"></path></svg>
                        <p class="mb-2 text-sm text-gray-500 dark:text-gray-400"><span class="font-semibold">Click to upload</span> or drag and drop</p>
                        <p class="text-xs text-gray-500 dark:text-gray-400">SVG, PNG, JPG or GIF (MAX. 4096KB)</p>
                      </div>
                      @if ($post->image)
                          <img src="{{ asset('storage/' . $post->image) }}" class="img-preview w-full object-cover object-center absolute z-10">
                          @else
                          <img  class="img-preview w-full object-cover object-center absolute z-10">
                      @endif
                      <input type="hidden" name="oldImage" value="{{ $post->image }}">
                      <input id="image" name="image" class="hidden"  onchange="previewImage()" type="file" />
                      @error('image')
                      <p id="standard_error_help" class="mt-2 text-xs text-red-600 dark:text-red-400"><span class="font-medium">Oh, snapp!</span> {{ $message }}</p>
                    @enderror
                </label>
            </div>

            <div class="relative z-0 w-full mb-6 group">
                <label for="body" class="sr-only">Body</label>
                <input id="body"  type="hidden" name="body" value="{{ old('body', $post->body) }}">
                <trix-editor  input="body"></trix-editor>
                @error('body')
                   <p id="standard_error_help" class="mt-2 text-xs text-red-600 dark:text-red-400"><span class="font-medium">Oh, snapp!</span> {{ $message }}</p>
                @enderror
                
            </div>
            

            <button type="submit" class="text-white bg-blue-700 hover:bg-blue-800 focus:ring-4 focus:outline-none focus:ring-blue-300 font-medium rounded-lg text-sm w-full sm:w-auto px-5 py-2.5 text-center dark:bg-blue-600 dark:hover:bg-blue-700 dark:focus:ring-blue-800">Create Informasi</button>
          </form>
        </div>
      </div>
    </div>
  </div>

    <script src="{{ asset('asset/js/slug.js') }}"></script>
    <script src="{{ asset('asset/js/previewImage.js') }}"></script>

</x-app-layout>