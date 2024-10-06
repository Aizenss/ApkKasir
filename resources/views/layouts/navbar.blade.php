<nav class="bg-white border-b shadow-md">
    <div class="max-w-screen-xl flex flex-wrap items-center justify-between mx-auto p-4">
        <div class="flex flex-col">
            <span class="text-[18px] md:text-[25px] text-[#663399] font-black whitespace-nowrap mb-0">ATK (Alat Tulis
                Kantor)</span>
            <span class="text-[12px] md:text-[15px] text-[#663399] font-medium whitespace-nowrap">Irsyad Andhika
                Ariadi</span>
        </div>
        <button data-collapse-toggle="navbar-default" type="button"
            class="inline-flex items-center p-2 w-10 h-10 justify-center text-sm text-gray-500 rounded-lg md:hidden hover:bg-gray-100 focus:outline-none focus:ring-2 focus:ring-gray-200"
            aria-controls="navbar-default" aria-expanded="false">
            <span class="sr-only">Open main menu</span>
            <i class="fa-solid fa-bars"></i>
        </button>
        <div class="hidden w-full md:block md:w-auto" id="navbar-default">
            @if (Auth::user()->role == 'admin')
            <ul
                class="font-medium text-lg flex flex-col p-4 space-y-3 md:space-y-0 md:p-0 mt-4 border border-gray-100 rounded-lg bg-white md:flex-row md:space-x-8 rtl:space-x-reverse md:mt-0 md:border-0 md:bg-white">
                {{-- <li>
                    <a href="{{ route('home') }}"
                        class="block text-[#663399] {{ request()->routeIs('home') ? 'border-b-2 border-[#663399]' : '' }}">Beranda</a>
                </li> --}}
                <li>
                    <a href="#"
                        class="block text-[#663399]">kategori</a>
                </li>
                <li>
                    <button id="dropdownNavbarLink" data-dropdown-toggle="dropdownNavbar"
                        class="flex items-center justify-between w-full py-2 px-3 text-[#663399] rounded hover:bg-gray-100 md:hover:bg-transparent md:border-0 md:p-0 md:w-auto">Admin
                        <svg class="w-2.5 h-2.5 ms-2.5" aria-hidden="true" xmlns="http://www.w3.org/2000/svg"
                            fill="none" viewBox="0 0 10 6">
                            <path stroke="currentColor" stroke-linecap="round" stroke-linejoin="round"
                                stroke-width="2" d="m1 1 4 4 4-4" />
                        </svg></button>
                    <!-- Dropdown menu -->
                    <div id="dropdownNavbar"
                        class="z-10 hidden font-normal bg-white divide-y divide-gray-100 rounded-lg shadow w-44">
                        <div class="py-1">
                            <a href="javascript:void(0)" onclick="logout()" class="block px-4 py-2 text-sm text-red-500 hover:bg-gray-100">Keluar</a>
                        </div>
                    </div>
                </li>
            </ul>

            @elseif (Auth::user()->role == 'employee')
            <ul
                class="font-medium text-lg flex flex-col p-4 space-y-3 md:space-y-0 md:p-0 mt-4 border border-gray-100 rounded-lg bg-white md:flex-row md:space-x-8 rtl:space-x-reverse md:mt-0 md:border-0 md:bg-white">
                {{-- <li>
                    <a href="{{ route('home') }}"
                        class="block text-[#663399] {{ request()->routeIs('home') ? 'border-b-2 border-[#663399]' : '' }}">Beranda</a>
                </li> --}}
                <li>
                    <a href="#"
                        class="block text-[#663399]">kategori</a>
                </li>
                <li>
                    <button id="dropdownNavbarLink" data-dropdown-toggle="dropdownNavbar"
                        class="flex items-center justify-between w-full py-2 px-3 text-[#663399] rounded hover:bg-gray-100 md:hover:bg-transparent md:border-0 md:p-0 md:w-auto">Employee
                        <svg class="w-2.5 h-2.5 ms-2.5" aria-hidden="true" xmlns="http://www.w3.org/2000/svg"
                            fill="none" viewBox="0 0 10 6">
                            <path stroke="currentColor" stroke-linecap="round" stroke-linejoin="round"
                                stroke-width="2" d="m1 1 4 4 4-4" />
                        </svg></button>
                    <!-- Dropdown menu -->
                    <div id="dropdownNavbar"
                        class="z-10 hidden font-normal bg-white divide-y divide-gray-100 rounded-lg shadow w-44">
                        <div class="py-1">
                            <a href="javascript:void(0)" onclick="logout()" class="block px-4 py-2 text-sm text-red-500 hover:bg-gray-100">Keluar</a>
                        </div>
                    </div>
                </li>
            </ul>
                
            @endif
        </div>
    </div>
</nav>
