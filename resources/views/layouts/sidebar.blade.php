@php

    $role = auth()->user()->role;

@endphp


<div class="w-64 bg-gray-900 text-gray-200 flex flex-col fixed h-screen">

    {{-- LOGO --}}
    <div class="p-6 text-2xl font-bold border-b border-gray-700">

        MiniMarket

    </div>



    {{-- MENU --}}
    <div class="flex-1 p-4 space-y-2 overflow-y-auto">



        {{-- ===================================== --}}
        {{-- ADMIN --}}
        {{-- ===================================== --}}

        @if($role == 'admin')

            <a href="/dashboard"
               class="block px-4 py-2 rounded-lg
               {{ request()->is('dashboard') ? 'bg-gray-800 text-white' : 'hover:bg-gray-800 hover:text-white transition' }}">

                Dashboard

            </a>


            <a href="/produk"
               class="block px-4 py-2 rounded-lg
               {{ request()->is('produk*') ? 'bg-gray-800 text-white' : 'hover:bg-gray-800 hover:text-white transition' }}">

                Produk

            </a>


            <a href="/transaksi"
               class="block px-4 py-2 rounded-lg
               {{ request()->is('transaksi*') ? 'bg-gray-800 text-white' : 'hover:bg-gray-800 hover:text-white transition' }}">

                Transaksi

            </a>


            <a href="/laporan"
               class="block px-4 py-2 rounded-lg
               {{ request()->is('laporan*') ? 'bg-gray-800 text-white' : 'hover:bg-gray-800 hover:text-white transition' }}">

                Laporan

            </a>

        @endif




        {{-- ===================================== --}}
        {{-- MANAGER --}}
        {{-- ===================================== --}}

        @if($role == 'manager')

            <a href="/manager"
               class="block px-4 py-2 rounded-lg
               {{ request()->is('manager') ? 'bg-gray-800 text-white' : 'hover:bg-gray-800 hover:text-white transition' }}">

                Dashboard

            </a>

        @endif




        {{-- ===================================== --}}
        {{-- SUPERVISOR --}}
        {{-- ===================================== --}}

        @if($role == 'supervisor')

            <a href="/supervisor"
               class="block px-4 py-2 rounded-lg
               {{ request()->is('supervisor') ? 'bg-gray-800 text-white' : 'hover:bg-gray-800 hover:text-white transition' }}">

                Dashboard

            </a>

        @endif




        {{-- ===================================== --}}
        {{-- KASIR --}}
        {{-- ===================================== --}}

        @if($role == 'kasir')

            <a href="/kasir"
               class="block px-4 py-2 rounded-lg
               {{ request()->is('kasir') ? 'bg-gray-800 text-white' : 'hover:bg-gray-800 hover:text-white transition' }}">

                Dashboard

            </a>

        @endif




        {{-- ===================================== --}}
        {{-- GUDANG --}}
        {{-- ===================================== --}}

        @if($role == 'gudang')

            <a href="/gudang"
               class="block px-4 py-2 rounded-lg
               {{ request()->is('gudang') ? 'bg-gray-800 text-white' : 'hover:bg-gray-800 hover:text-white transition' }}">

                Dashboard

            </a>

        @endif

    </div>

    <!-- Footer kecil -->
    <div class="p-4 text-sm border-t border-gray-700 text-center">
        © 2026
    </div>

</div>