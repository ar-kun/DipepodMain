<x-app-layout>
  <x-slot name="header">
    <div class="w-full flex justify-center items-center">
      <h2 class="font-semibold text-xl text-gray-800 leading-tight">
        {{ __('Pengajuan UMKM Baru - Desa Nagrak Selatan') }}
      </h2>

  </x-slot>
  <div class="py-5">
    <div class="max-w-7xl mx-auto sm:px-6 lg:px-8">
      <div class="mt-10 bg-white overflow-hidden shadow-sm sm:rounded-lg">
        <div class="p-10">
          <div class="mb-10 bg-orange-500 p-5 text-white rounded-lg"><p>Note : Untuk Pengajuan Produk UMKM Hanya Untuk Warga Desa Nagrak Selatan, Diluar dari warga desa pengajuan akan di tolak. <span class="block text-sm italic">Hubungi No 099 untuk Informasi lebih lanjut </span></p></div>
          <form method="post" action="/dashboard/umkm" enctype="multipart/form-data">
            @csrf
            <div class="relative z-0 w-full mb-6 group">
              <input type="text" name="nama_product" id="nama_product"
                class="block py-2.5 px-0 w-full text-sm text-gray-900 bg-transparent border-0 border-b-2 border-gray-300 appearance-none dark:text-white dark:border-gray-600 dark:focus:border-blue-500 focus:outline-none focus:ring-0 focus:border-blue-600 peer @error('nama_product') is-invalid @enderror"
                placeholder=" " autofocus value="{{ old('nama_product') }}" />
              <label for="nama_product"
                class="peer-focus:font-medium absolute text-sm text-gray-500 dark:text-gray-400 duration-300 transform -translate-y-6 scale-75 top-3 -z-10 origin-[0] peer-focus:left-0 peer-focus:text-blue-600 peer-focus:dark:text-blue-500 peer-placeholder-shown:scale-100 peer-placeholder-shown:translate-y-0 peer-focus:scale-75 peer-focus:-translate-y-6 @error('nama_product') is-invalid @enderror">Nama
                Produk</label>
              @error('nama_product')
              <p id="standard_error_help" class="mt-2 text-xs text-red-600 dark:text-red-400"><span class="font-medium">Oh,
                  snapp!</span> {{ $message }}</p>
              @enderror
            </div>

            <div class="relative z-0 w-full mb-6 group hidden">
                <input type="text" name="slug" id="slug" class="block py-2.5 px-0 w-full text-sm text-gray-900 bg-transparent border-0 border-b-2 border-gray-300 appearance-none dark:text-white dark:border-gray-600 dark:focus:border-blue-500 focus:outline-none focus:ring-0 focus:border-blue-600 peer  @error('slug') is-invalid @enderror" placeholder=" " value="{{ old('slug') }}"/>
                <label for="slug" class="peer-focus:font-medium absolute text-sm text-gray-500 dark:text-gray-400 duration-300 transform -translate-y-6 scale-75 top-3 -z-10 origin-[0] peer-focus:left-0 peer-focus:text-blue-600 peer-focus:dark:text-blue-500 peer-placeholder-shown:scale-100 peer-placeholder-shown:translate-y-0 peer-focus:scale-75 peer-focus:-translate-y-6  @error('slug') is-invalid @enderror">Slug</label>
                @error('slug')
                    <p id="standard_error_help" class="mt-2 text-xs text-red-600 dark:text-red-400"><span class="font-medium">Oh, snapp!</span> {{ $message }}</p>
                @enderror
            </div>

            <div class="relative z-0 w-full mb-6 group">
              <input type="text" name="nama_penjual" id="nama_penjual"
                class="block py-2.5 px-0 w-full text-sm text-gray-900 bg-transparent border-0 border-b-2 border-gray-300 appearance-none dark:text-white dark:border-gray-600 dark:focus:border-blue-500 focus:outline-none focus:ring-0 focus:border-blue-600 peer @error('nama_penjual') is-invalid @enderror"
                placeholder=" " autofocus value="{{ old('nama_penjual') }}" />
              <label for="nama_penjual"
                class="peer-focus:font-medium absolute text-sm text-gray-500 dark:text-gray-400 duration-300 transform -translate-y-6 scale-75 top-3 -z-10 origin-[0] peer-focus:left-0 peer-focus:text-blue-600 peer-focus:dark:text-blue-500 peer-placeholder-shown:scale-100 peer-placeholder-shown:translate-y-0 peer-focus:scale-75 peer-focus:-translate-y-6 @error('nama_penjual') is-invalid @enderror">Nama
                Lengkap (Penjual | Pemilik Usaha)</label>
              @error('nama_penjual')
              <p id="standard_error_help" class="mt-2 text-xs text-red-600 dark:text-red-400"><span class="font-medium">Oh,
                  snapp!</span> {{ $message }}</p>
              @enderror
            </div>

            <div class="relative z-0 w-full mb-6 group">
              <input type="text" name="alamat_penjual" id="alamat_penjual"
                class="block py-2.5 px-0 w-full text-sm text-gray-900 bg-transparent border-0 border-b-2 border-gray-300 appearance-none dark:text-white dark:border-gray-600 dark:focus:border-blue-500 focus:outline-none focus:ring-0 focus:border-blue-600 peer @error('alamat_penjual') is-invalid @enderror"
                placeholder=" " autofocus value="{{ old('alamat_penjual') }}" />
              <label for="alamat_penjual"
                class="peer-focus:font-medium absolute text-sm text-gray-500 dark:text-gray-400 duration-300 transform -translate-y-6 scale-75 top-3 -z-10 origin-[0] peer-focus:left-0 peer-focus:text-blue-600 peer-focus:dark:text-blue-500 peer-placeholder-shown:scale-100 peer-placeholder-shown:translate-y-0 peer-focus:scale-75 peer-focus:-translate-y-6 @error('alamat_penjual') is-invalid @enderror">Alamat
                Lengkap (Penjual | Pemilik Usaha)</label>
              @error('alamat_penjual')
              <p id="standard_error_help" class="mt-2 text-xs text-red-600 dark:text-red-400"><span class="font-medium">Oh,
                  snapp!</span> {{ $message }}</p>
              @enderror
            </div>

            <div class="relative z-0 w-full mb-6 group">
              <input type="text" name="contact" id="contact"
                class="block py-2.5 px-0 w-full text-sm text-gray-900 bg-transparent border-0 border-b-2 border-gray-300 appearance-none dark:text-white dark:border-gray-600 dark:focus:border-blue-500 focus:outline-none focus:ring-0 focus:border-blue-600 peer @error('contact') is-invalid @enderror"
                placeholder=" " autofocus value="{{ old('contact') }}" />
              <label for="contact"
                class="peer-focus:font-medium absolute text-sm text-gray-500 dark:text-gray-400 duration-300 transform -translate-y-6 scale-75 top-3 -z-10 origin-[0] peer-focus:left-0 peer-focus:text-blue-600 peer-focus:dark:text-blue-500 peer-placeholder-shown:scale-100 peer-placeholder-shown:translate-y-0 peer-focus:scale-75 peer-focus:-translate-y-6 @error('contact') is-invalid @enderror">No
                Hp / WhatsApp</label>
              @error('contact')
              <p id="standard_error_help" class="mt-2 text-xs text-red-600 dark:text-red-400"><span class="font-medium">Oh,
                  snapp!</span> {{ $message }}</p>
              @enderror
            </div>

            <div class="relative z-0 w-full mb-6 group">
              <input type="text" name="link_shopee" id="link_shopee"
                class="block py-2.5 px-0 w-full text-sm text-gray-900 bg-transparent border-0 border-b-2 border-gray-300 appearance-none dark:text-white dark:border-gray-600 dark:focus:border-blue-500 focus:outline-none focus:ring-0 focus:border-blue-600 peer @error('link_shopee') is-invalid @enderror"
                placeholder=" " autofocus value="{{ old('link_shopee') }}" />
              <label for="link_shopee"
                class="peer-focus:font-medium absolute text-sm text-gray-500 dark:text-gray-400 duration-300 transform -translate-y-6 scale-75 top-3 -z-10 origin-[0] peer-focus:left-0 peer-focus:text-blue-600 peer-focus:dark:text-blue-500 peer-placeholder-shown:scale-100 peer-placeholder-shown:translate-y-0 peer-focus:scale-75 peer-focus:-translate-y-6 @error('link_shopee') is-invalid @enderror">Link
                Shoppe (Jika ada)</label>
              @error('link_shopee')
              <p id="standard_error_help" class="mt-2 text-xs text-red-600 dark:text-red-400"><span class="font-medium">Oh,
                  snapp!</span> {{ $message }}</p>
              @enderror
            </div>

            <div class="relative z-0 w-full mb-6 group">
              <input type="text" name="link_tokopedia" id="link_tokopedia"
                class="block py-2.5 px-0 w-full text-sm text-gray-900 bg-transparent border-0 border-b-2 border-gray-300 appearance-none dark:text-white dark:border-gray-600 dark:focus:border-blue-500 focus:outline-none focus:ring-0 focus:border-blue-600 peer @error('link_tokopedia') is-invalid @enderror"
                placeholder=" " autofocus value="{{ old('link_tokopedia') }}" />
              <label for="link_tokopedia"
                class="peer-focus:font-medium absolute text-sm text-gray-500 dark:text-gray-400 duration-300 transform -translate-y-6 scale-75 top-3 -z-10 origin-[0] peer-focus:left-0 peer-focus:text-blue-600 peer-focus:dark:text-blue-500 peer-placeholder-shown:scale-100 peer-placeholder-shown:translate-y-0 peer-focus:scale-75 peer-focus:-translate-y-6 @error('link_tokopedia') is-invalid @enderror">Link
                Tokopedia (Jika ada)</label>
              @error('link_tokopedia')
              <p id="standard_error_help" class="mt-2 text-xs text-red-600 dark:text-red-400"><span class="font-medium">Oh,
                  snapp!</span> {{ $message }}</p>
              @enderror
            </div>

            <div class="relative z-0 w-full mb-6 group">
              <input type="text" name="link_lainnya" id="link_lainnya"
                class="block py-2.5 px-0 w-full text-sm text-gray-900 bg-transparent border-0 border-b-2 border-gray-300 appearance-none dark:text-white dark:border-gray-600 dark:focus:border-blue-500 focus:outline-none focus:ring-0 focus:border-blue-600 peer @error('link_lainnya') is-invalid @enderror"
                placeholder=" " autofocus value="{{ old('link_lainnya') }}" />
              <label for="link_lainnya"
                class="peer-focus:font-medium absolute text-sm text-gray-500 dark:text-gray-400 duration-300 transform -translate-y-6 scale-75 top-3 -z-10 origin-[0] peer-focus:left-0 peer-focus:text-blue-600 peer-focus:dark:text-blue-500 peer-placeholder-shown:scale-100 peer-placeholder-shown:translate-y-0 peer-focus:scale-75 peer-focus:-translate-y-6 @error('link_lainnya') is-invalid @enderror">Link
                Online Shop Lainnya (Jika ada)</label>
              @error('link_lainnya')
              <p id="standard_error_help" class="mt-2 text-xs text-red-600 dark:text-red-400"><span class="font-medium">Oh,
                  snapp!</span> {{ $message }}</p>
              @enderror
            </div>

            <div class="relative z-0 w-full mb-6 flex flex-wrap justify-between">
              <div class="relative z-0 w-[45%] mb-6 group">
                <input type="number" name="harga_minimum" id="harga_minimum"
                  class="block py-2.5 px-0 w-full text-sm text-gray-900 bg-transparent border-0 border-b-2 border-gray-300 appearance-none dark:text-white dark:border-gray-600 dark:focus:border-blue-500 focus:outline-none focus:ring-0 focus:border-blue-600 peer @error('harga_minimum') is-invalid @enderror"
                  placeholder=" " autofocus value="{{ old('harga_minimum') }}" />
                <label for="harga_minimum"
                  class="peer-focus:font-medium absolute text-sm text-gray-500 dark:text-gray-400 duration-300 transform -translate-y-6 scale-75 top-3 -z-10 origin-[0] peer-focus:left-0 peer-focus:text-blue-600 peer-focus:dark:text-blue-500 peer-placeholder-shown:scale-100 peer-placeholder-shown:translate-y-0 peer-focus:scale-75 peer-focus:-translate-y-6 @error('harga_minimum') is-invalid @enderror">Harga
                  Terendah Produk - Minimum</label>
                @error('harga_minimum')
                <p id="standard_error_help" class="mt-2 text-xs text-red-600 dark:text-red-400"><span class="font-medium">Oh,
                    snapp!</span> {{ $message }}</p>
                @enderror
              </div>
              <div class="relative z-0 w-[45%] mb-6 group">
                <input type="number" name="harga_maximum" id="harga_maximum"
                  class="block py-2.5 px-0 w-full text-sm text-gray-900 bg-transparent border-0 border-b-2 border-gray-300 appearance-none dark:text-white dark:border-gray-600 dark:focus:border-blue-500 focus:outline-none focus:ring-0 focus:border-blue-600 peer @error('harga_maximum') is-invalid @enderror"
                  placeholder=" " autofocus value="{{ old('harga_maximum') }}" />
                <label for="harga_maximum"
                  class="peer-focus:font-medium absolute text-sm text-gray-500 dark:text-gray-400 duration-300 transform -translate-y-6 scale-75 top-3 -z-10 origin-[0] peer-focus:left-0 peer-focus:text-blue-600 peer-focus:dark:text-blue-500 peer-placeholder-shown:scale-100 peer-placeholder-shown:translate-y-0 peer-focus:scale-75 peer-focus:-translate-y-6 @error('harga_maximum') is-invalid @enderror">Harga
                  Tertinggi Produk - Maximum (Jika ada)</label>
                @error('harga_maximum')
                <p id="standard_error_help" class="mt-2 text-xs text-red-600 dark:text-red-400"><span class="font-medium">Oh,
                    snapp!</span> {{ $message }}</p>
                @enderror
              </div>
              <div class="w-full">
                <p class="text-xs text-red-500">*Hanya isi harga Minimum jika harga barang cuma 1</p>
              </div>
            </div>

            <div class="relative z-0 w-full mb-6 group">
              <input type="text" name="kondisi_penyimpanan" id="kondisi_penyimpanan"
                class="block py-2.5 px-0 w-full text-sm text-gray-900 bg-transparent border-0 border-b-2 border-gray-300 appearance-none dark:text-white dark:border-gray-600 dark:focus:border-blue-500 focus:outline-none focus:ring-0 focus:border-blue-600 peer @error('kondisi_penyimpanan') is-invalid @enderror"
                placeholder=" " autofocus value="{{ old('kondisi_penyimpanan') }}" />
              <label for="kondisi_penyimpanan"
                class="peer-focus:font-medium absolute text-sm text-gray-500 dark:text-gray-400 duration-300 transform -translate-y-6 scale-75 top-3 -z-10 origin-[0] peer-focus:left-0 peer-focus:text-blue-600 peer-focus:dark:text-blue-500 peer-placeholder-shown:scale-100 peer-placeholder-shown:translate-y-0 peer-focus:scale-75 peer-focus:-translate-y-6 @error('kondisi_penyimpanan') is-invalid @enderror">Kondisi Penyimpanan Produk (Jika ada)</label>
              @error('kondisi_penyimpanan')
              <p id="standard_error_help" class="mt-2 text-xs text-red-600 dark:text-red-400"><span class="font-medium">Oh,
                  snapp!</span> {{ $message }}</p>
              @enderror
            </div>

            <div class="relative z-0 w-full mb-6 group">
              <input type="text" name="berat_produk" id="berat_produk"
                class="block py-2.5 px-0 w-full text-sm text-gray-900 bg-transparent border-0 border-b-2 border-gray-300 appearance-none dark:text-white dark:border-gray-600 dark:focus:border-blue-500 focus:outline-none focus:ring-0 focus:border-blue-600 peer @error('berat_produk') is-invalid @enderror"
                placeholder=" " autofocus value="{{ old('berat_produk') }}" />
              <label for="berat_produk"
                class="peer-focus:font-medium absolute text-sm text-gray-500 dark:text-gray-400 duration-300 transform -translate-y-6 scale-75 top-3 -z-10 origin-[0] peer-focus:left-0 peer-focus:text-blue-600 peer-focus:dark:text-blue-500 peer-placeholder-shown:scale-100 peer-placeholder-shown:translate-y-0 peer-focus:scale-75 peer-focus:-translate-y-6 @error('berat_produk') is-invalid @enderror">Berat Produk (Jika ada)</label>
              @error('berat_produk')
              <p id="standard_error_help" class="mt-2 text-xs text-red-600 dark:text-red-400"><span class="font-medium">Oh,
                  snapp!</span> {{ $message }}</p>
              @enderror
            </div>
            
            <div class="relative z-0 w-full mb-6 group">
              <input type="text" name="expired" id="expired"
                class="block py-2.5 px-0 w-full text-sm text-gray-900 bg-transparent border-0 border-b-2 border-gray-300 appearance-none dark:text-white dark:border-gray-600 dark:focus:border-blue-500 focus:outline-none focus:ring-0 focus:border-blue-600 peer @error('expired') is-invalid @enderror"
                placeholder=" " autofocus value="{{ old('expired') }}" />
              <label for="expired"
                class="peer-focus:font-medium absolute text-sm text-gray-500 dark:text-gray-400 duration-300 transform -translate-y-6 scale-75 top-3 -z-10 origin-[0] peer-focus:left-0 peer-focus:text-blue-600 peer-focus:dark:text-blue-500 peer-placeholder-shown:scale-100 peer-placeholder-shown:translate-y-0 peer-focus:scale-75 peer-focus:-translate-y-6 @error('expired') is-invalid @enderror">Expired Produk (Jika ada)</label>
              @error('expired')
              <p id="standard_error_help" class="mt-2 text-xs text-red-600 dark:text-red-400"><span class="font-medium">Oh,
                  snapp!</span> {{ $message }}</p>
              @enderror
            </div>

            <div class="relative z-0 w-full mb-6 group">
              <label for="categoryPost" class="sr-only">Category</label>
              <select id="categoryPost" name="category_id"
                class="block py-2.5 px-0 w-full text-sm text-gray-500 bg-transparent border-0 border-b-2 border-gray-200 appearance-none dark:text-gray-400 dark:border-gray-700 focus:outline-none focus:ring-0 focus:border-gray-200 peer">
                @foreach ($categories as $category)
                @if(old('category_id') == $category->id)
                <option class="p-5" value="{{ $category->id }}" selected>{{ $category->name }}</option>
                @else
                <option class="p-5" value="{{ $category->id }}">{{ $category->name }}</option>
                @endif
                @endforeach
              </select>
            </div>


            <div class="flex mb-6 items-center justify-center w-full">
              <label for="image"
                class="relative overflow-hidden flex flex-col items-center justify-center w-full h-64 border-2 border-gray-300 border-dashed rounded-lg cursor-pointer bg-gray-50 dark:hover:bg-bray-800 dark:bg-gray-700 hover:bg-gray-100 dark:border-gray-600 dark:hover:border-gray-500 dark:hover:bg-gray-600 @error('image') is-invalid @enderror">
                <div class="flex flex-col items-center justify-center pt-5 pb-6">
                  <svg aria-hidden="true" class="w-10 h-10 mb-3 text-gray-400" fill="none" stroke="currentColor"
                    viewBox="0 0 24 24" xmlns="http://www.w3.org/2000/svg">
                    <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2"
                      d="M7 16a4 4 0 01-.88-7.903A5 5 0 1115.9 6L16 6a5 5 0 011 9.9M15 13l-3-3m0 0l-3 3m3-3v12"></path>
                  </svg>
                  <p class="mb-2 text-sm text-gray-500 dark:text-gray-400"><span class="font-semibold">Click to upload</span> or
                    drag and drop</p>
                  <p class="text-xs text-gray-500 dark:text-gray-400">SVG, PNG, JPG or GIF (MAX. 4096KB)</p>
                </div>
                <img class="img-preview w-full object-cover object-center absolute z-10">
                <input id="image" name="image" class="hidden" onchange="previewImage()" type="file" />
                @error('image')
                <p id="standard_error_help" class="mt-2 text-xs text-red-600 dark:text-red-400"><span class="font-medium">Oh,
                    snapp!</span> {{ $message }}</p>
                @enderror
              </label>
            </div>

            <div class="relative z-0 w-full mb-6 group">
              <label for="deskripsi" class="sr-only">Deskripsi Produk</label>
              <input id="deskripsi" type="hidden" name="deskripsi" value="{{ old('deskripsi') }}">
              <trix-editor input="deskripsi"></trix-editor>
              <p class="text-xs text-red-500 mt-2">*Deskripsi Produk</p>
              @error('deskripsi')
              <p id="standard_error_help" class="mt-2 text-xs text-red-600 dark:text-red-400"><span class="font-medium">Oh,
                  snapp!</span> {{ $message }}</p>
              @enderror

            </div>


            <button type="submit"
              class="text-white bg-blue-700 hover:bg-blue-800 focus:ring-4 focus:outline-none focus:ring-blue-300 font-medium rounded-lg text-sm w-full sm:w-auto px-5 py-2.5 text-center dark:bg-blue-600 dark:hover:bg-blue-700 dark:focus:ring-blue-800">Kirim Pengajuan</button>
          </form>
        </div>
      </div>

      <script src="{{ asset('asset/js/slugUmkm.js') }}"></script>
      <script src="{{ asset('asset/js/previewImage.js') }}"></script>

    </div>
  </div>
</x-app-layout>