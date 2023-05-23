<header class="absolute top-0 left-0 z-10 flex w-full items-center bg-transparent">
  <div class="container">
    <div class="relative flex items-center justify-center lg:justify-between">

       <button id="humburger" name="humburger" type="button" class="absolute left-4 block lg:hidden">
         <span class="humburger-line origin-top-left"></span>
         <span class="humburger-line"></span>
         <span class="humburger-line origin-bottom-left"></span>
       </button>
       <div class="flex  items-center self-center px-4">
          <a href="#home" class="flex h-16 items-center font-bold text-white lg:text-2xl"><span
              class="text-third">DIPEPOD&nbsp;</span> Nagrak Selatan</a>
        </div>
      <div class="flex justify-between items-center px-4">
        <nav id="nav-menu"
          class="absolute left-4 top-full hidden w-full max-w-[250px] rounded-lg bg-primary py-5 shadow-lg lg:static lg:block lg:max-w-full lg:rounded-none lg:bg-transparent lg:shadow-none">
          <ul class="block lg:flex">
            <li class="group">
              <a href="/"
                class="{{ ($title ==="Home")?'active': '' }} under-animasi mx-8 inline-block py-2 text-base text-white group-hover:text-third">Beranda</a>
            </li>
            <li class="group"><a href="/about"
                class="{{ ($title ==="About")?'active': '' }} under-animasi mx-8 inline-block py-2 text-base text-white group-hover:text-third">Profile</a>
            </li>
            <li class="group">
              <a href="/umkm"
                class="{{ ($title ==="UMKM")?'active': '' }} under-animasi mx-8 inline-block py-2 text-base text-white group-hover:text-third">UMKM</a>

            </li>
            <li class="group"><a href="/wisata"
                class="{{ ($title ==="Wisata")?'active': '' }} under-animasi mx-8 inline-block py-2 text-base text-white group-hover:text-third">Wisata</a>
            </li>
            <li class="group"><a href="/blogs"
                class="{{ ($title ==="Informasi Desa")?'active': '' }} under-animasi ml-8 inline-block py-2 text-base text-white group-hover:text-third">Informasi</a>
            </li>
            <li class="mt-3 flex items-center pl-8 lg:mt-0">
              <div class="flex items-center">
                <span class="mr-8 text-white hidden lg:block">|</span>
                
                @auth
                <span class="mr-8 text-white hidden lg:block">|</span>

                @else
                <a href="{{ route('login') }}" type="button"
                  class="mr-2 mb-2 rounded-full bg-third px-5 py-1.5 text-center text-sm font-medium text-white transition-all duration-500 hover:bg-white hover:text-dark focus:outline-none focus:ring-4 focus:ring-third">
                  Login
                </a>
                @endauth

              </div>
            </li>
          </ul>
        </nav>
      </div>
      @auth
      {{-- <div class="relative"> --}}
        <img id="avatarButton" type="button" data-dropdown-toggle="userDropdown" data-dropdown-placement="bottom-start"
          class="absolute right-4 w-10 h-10 rounded-full cursor-pointer" src="{{ asset('asset/images/slice3.png') }}" alt="User dropdown">

        <!-- Dropdown menu -->
        <div id="userDropdown"
          class="absolute right-4 top-full z-10 hidden bg-white divide-y divide-gray-100 rounded-lg shadow w-44 dark:bg-gray-700 dark:divide-gray-600">
          <div class="px-4 py-3 text-sm text-gray-900 dark:text-white">
            <div>{{ auth()->user()->username }}</div>
          </div>
          <ul class="py-2 text-sm text-gray-700 dark:text-gray-200" aria-labelledby="avatarButton">
            <li>
              <a href="/dashboard" class="block px-4 py-2 hover:bg-gray-100 dark:hover:bg-gray-600 dark:hover:text-white">Dashboard</a>
            </li>
            <li>
              <a href="/profile" class="block px-4 py-2 hover:bg-gray-100 dark:hover:bg-gray-600 dark:hover:text-white">Settings</a>
            </li>
          </ul>
          <div class="py-1">
             <form method="POST" action="{{ route('logout') }}">
                            @csrf

                            <x-dropdown-link :href="route('logout')"
                                    onclick="event.preventDefault();
                                                this.closest('form').submit();">
                                {{ __('Log Out') }}
                            </x-dropdown-link>
                        </form>
          </div>
        </div>
      {{-- </div> --}}
      @endauth
    </div>
  </div>
</header>