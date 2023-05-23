<x-app-layout>
  <x-slot name="header">
    <div class="w-full flex justify-between items-center">
      <div class="p-6 text-gray-900 ">
        <li type="none"><a href="/dashboard/umkm"
            class="bg-third/75 hover:bg-third/50 text-white font-bold py-2 px-4 border-b-4 border-third hover:border-third/75 rounded"><i class="fa-solid fa-arrow-left"></i> Back To Daftar UMKM</a></li>
      </div>
      <h2 class="font-semibold text-xl text-gray-800 leading-tight">
        {{ __('Pengajuan Usaha Mikro Kecil dan Menengah (UMKM) | Belum Disetujui') }}
      </h2>
      
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
                <th class="px-4 py-2">Nama Penjual</th>
                <th class="px-4 py-2">Alamat</th>
                <th class="px-4 py-2">Status</th>
                <th class="px-4 py-2">Category</th>
                <th class="px-4 py-2">Action</th>
              </tr>
            </thead>
            <tbody>
              @foreach ($umkms as $umkm)
              @if ($umkm->persetujuan == false)
                  <tr>
                <td class="border px-4 py-2">{{ $loop->iteration }}</td>
                <td class="border px-4 py-2">{{ $umkm->nama_penjual }}</td>
                <td class="border px-4 py-2">{{ $umkm->alamat_penjual }}</td>
                <td class="border px-4 py-2">
                <span class="px-2 inline-flex text-xs leading-5 font-semibold rounded-full bg-yellow-100 text-yellow-800">Belum Disetujui</span>
                </td>
                <td class="border px-4 py-2">{{ $umkm->category->name }}</td>
                <td class="border px-4 py-2">
                  
                  <form method="post" action="/dashboard/umkm/{{ $umkm->slug }}" enctype="multipart/form-data" class="inline">
                    @method('put')
                    @csrf

                    <input type="hidden" name="persetujuan" value="true">
                    <button 
                    class="relative inline-flex items-center justify-center p-0.5 mb-2 mr-2 overflow-hidden text-sm font-medium text-gray-900 rounded-lg group bg-gradient-to-br from-green-500 to-lime-500 group-hover:from-green-500 group-hover:to-lime-500 hover:text-white dark:text-white focus:ring-4 focus:outline-none focus:ring-lime-200 dark:focus:ring-green-500" onclick="return confirm('are you sure ?')">
                    <span
                      class="relative px-2.5 py-1.5 transition-all ease-in duration-75 bg-white dark:bg-gray-900 rounded-md group-hover:bg-opacity-0">
                      <i class="fa-regular fa-square-check"></i>
                    </span> <span class="px-3 text-white group-hover:text-third">Accept</span>
                  </button>
                  </form>

                  <a href="/dashboard/umkm/{{ $umkm->slug }}"
                    class="relative inline-flex items-center justify-center p-0.5 mb-2 mr-2 overflow-hidden text-sm font-medium text-gray-900 rounded-lg group bg-gradient-to-br from-cyan-500 to-blue-500 group-hover:from-cyan-500 group-hover:to-blue-500 hover:text-white dark:text-white focus:ring-4 focus:outline-none focus:ring-cyan-200 dark:focus:ring-cyan-800">
                    <span
                      class="relative px-2.5 py-1.5 transition-all ease-in duration-75 bg-white dark:bg-gray-900 rounded-md group-hover:bg-opacity-0">
                      <i class="fa-regular fa-eye"></i>
                    </span>
                  </a>
  
                  <form action="/dashboard/umkm/{{ $umkm->slug }}" method="post" class="inline">
                    @method('delete')
                    @csrf
                    <button 
                    class="relative inline-flex items-center justify-center p-0.5 mb-2 mr-2 overflow-hidden text-sm font-medium text-gray-900 rounded-lg group bg-gradient-to-br from-red-500 to-orange-500 group-hover:from-red-500 group-hover:to-orange-500 hover:text-white dark:text-white focus:ring-4 focus:outline-none focus:ring-cyan-200 dark:focus:ring-red-500" onclick="return confirm('are you sure ?')">
                    <span
                      class="relative px-2.5 py-1.5 transition-all ease-in duration-75 bg-white dark:bg-gray-900 rounded-md group-hover:bg-opacity-0">
                      <i class="fa-regular fa-circle-xmark"></i>
                    </span>
                  </button>
                  </form>
                  

                </td>
              </tr>
              @endif
              
              @endforeach
            </tbody>
          </table>
        </div>
      </div>

      <script>
        // close alert-post saat tombol button di klik
        const alertElement = document.getElementById('alert-post');
        const closeButton = document.getElementById('closeButton');

        closeButton.addEventListener('click', () => {
          alertElement.classList.add('hidden');
        });
      </script>

    </div>
  </div>
</x-app-layout>