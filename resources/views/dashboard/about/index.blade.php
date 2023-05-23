<x-app-layout>
  <x-slot name="header">
    <div class="w-full flex justify-between items-center">
      <h2 class="font-semibold text-xl text-gray-800 leading-tight">
        {{ __('Perangkat Desa Nagrak Selatan') }}
      </h2>
      <div class="p-6 text-gray-900 ">
        <li type="none"><a href="/dashboard/about/create"
            class="bg-blue-500 hover:bg-blue-400 text-white font-bold py-2 px-4 border-b-4 border-blue-700 hover:border-blue-500 rounded">Create
            New</a></li>
      </div>
    </div>
  </x-slot>

  @if (session()->has('success'))
  <div class="container px-14  mt-5" id="alert-post">
      <div id="alert-border-3" class=" rounded-lg flex p-4 mb-4 text-green-800 border-t-4 border-green-300 bg-green-50 dark:text-green-400 dark:bg-gray-800 dark:border-green-800" role="alert">
    <svg class="flex-shrink-0 w-5 h-5" fill="currentColor" viewBox="0 0 20 20" xmlns="http://www.w3.org/2000/svg"><path fill-rule="evenodd" d="M18 10a8 8 0 11-16 0 8 8 0 0116 0zm-7-4a1 1 0 11-2 0 1 1 0 012 0zM9 9a1 1 0 000 2v3a1 1 0 001 1h1a1 1 0 100-2v-3a1 1 0 00-1-1H9z" clip-rule="evenodd"></path></svg>
    <div class="ml-3 text-sm font-medium">
      {{ session('success')  }}
    </div>
    <button type="button" id="closeButton" class="ml-auto -mx-1.5 -my-1.5 bg-green-50 text-green-500 rounded-lg focus:ring-2 focus:ring-green-400 p-1.5 hover:bg-green-200 inline-flex h-8 w-8 dark:bg-gray-800 dark:text-green-400 dark:hover:bg-gray-700"  data-dismiss-target="#alert-border-3" aria-label="Close">
      <span class="sr-only">Dismiss</span>
      <svg aria-hidden="true" class="w-5 h-5" fill="currentColor" viewBox="0 0 20 20" xmlns="http://www.w3.org/2000/svg"><path fill-rule="evenodd" d="M4.293 4.293a1 1 0 011.414 0L10 8.586l4.293-4.293a1 1 0 111.414 1.414L11.414 10l4.293 4.293a1 1 0 01-1.414 1.414L10 11.414l-4.293 4.293a1 1 0 01-1.414-1.414L8.586 10 4.293 5.707a1 1 0 010-1.414z" clip-rule="evenodd"></path></svg>
    </button>
</div>
</div>
  @endif

  <div class="py-5">
    <div class="max-w-7xl mx-auto sm:px-6 lg:px-8">
      <div class=" bg-white overflow-hidden shadow-sm sm:rounded-lg">
        <div class="">
          <table class="table-auto w-full">
            <thead>
              <tr>
                <th class="px-4 py-2">#</th>
                <th class="px-4 py-2">Nama</th>
                <th class="px-4 py-2">Jabatan</th>
                <th class="px-4 py-2">Tempat, Tanggal Lahir</th>
                <th class="px-4 py-2">Alamat</th>
                <th class="px-4 py-2">Action</th>
              </tr>
            </thead>
            <tbody>
              @foreach ($about as $item)
              <tr>
                <td class="border px-4 py-2">{{ $loop->iteration }}</td>
                <td class="border px-4 py-2">{{ $item->nama_lengkap }}</td>
                <td class="border px-4 py-2">{{ $item->jabaran }}</td>
                <td class="border px-4 py-2">{{ $item->tanggal_lahir }}</td>
                <td class="border px-4 py-2">{{ $item->alamat }}</td>
                <td class="border px-4 py-2">
                  <a href="/dashboard/about/{{ $item->slug }}/edit"
                    class="relative inline-flex items-center justify-center p-0.5 mb-2 mr-2 overflow-hidden text-sm font-medium text-gray-900 rounded-lg group bg-gradient-to-br from-amber-300 to-yellow-400 group-hover:from-amber-300 group-hover:to-yellow-400 hover:text-white dark:text-white focus:ring-4 focus:outline-none focus:ring-pink-200 dark:focus:ring-pink-800">
                    <span
                      class="relative px-2.5 py-1.5 transition-all ease-in duration-75 bg-white dark:bg-gray-900 rounded-md group-hover:bg-opacity-0">
                      <i class="fa-regular fa-pen-to-square"></i> Edit
                    </span>
                  </a>
                  <form action="/dashboard/about/{{ $item->slug }}" method="post" class="inline">
                    @method('delete')
                    @csrf
                    <button 
                    class="relative inline-flex items-center justify-center p-0.5 mb-2 mr-2 overflow-hidden text-sm font-medium text-gray-900 rounded-lg group bg-gradient-to-br from-red-500 to-orange-500 group-hover:from-red-500 group-hover:to-orange-500 hover:text-white dark:text-white focus:ring-4 focus:outline-none focus:ring-cyan-200 dark:focus:ring-red-500" onclick="return confirm('are you sure ?')">
                    <span
                      class="relative px-2.5 py-1.5 transition-all ease-in duration-75 bg-white dark:bg-gray-900 rounded-md group-hover:bg-opacity-0">
                      <i class="fa-regular fa-circle-xmark"></i> Hapus
                    </span>
                  </a>
                  </form>
                  

                </td>
              </tr>
              @endforeach
            </tbody>
          </table>
        </div>
      </div>

      <script src="{{ asset('asset/js/closeAlert.js') }}"></script>

    </div>
  </div>
</x-app-layout>