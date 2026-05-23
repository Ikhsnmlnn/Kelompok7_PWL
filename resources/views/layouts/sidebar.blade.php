<div class="w-64 bg-gray-900 text-gray-200 flex flex-col fixed h-screen">

    <!-- Logo -->
    <div class="p-6 text-2xl font-bold border-b border-gray-700">
        MiniMarket
    </div>

    <!-- Menu -->
    <div class="flex-1 p-4 space-y-2">

        <a href="/dashboard"
        class="block px-4 py-2 rounded-lg transition
        {{ request()->is('dashboard') 
                ? 'bg-gray-800 text-white' 
                : 'hover:bg-gray-800 hover:text-white' }}">
            Dashboard
        </a>

        <a href="/produk"
        class="block px-4 py-2 rounded-lg transition
        {{ request()->is('produk*') 
                ? 'bg-gray-800 text-white' 
                : 'hover:bg-gray-800 hover:text-white' }}">
            Produk
        </a>

        <a href="/transaksi"
        class="block px-4 py-2 rounded-lg transition
        {{ request()->is('transaksi*') 
                ? 'bg-gray-800 text-white' 
                : 'hover:bg-gray-800 hover:text-white' }}">
            Transaksi
        </a>

        <a href="/laporan"
        class="block px-4 py-2 rounded-lg transition
        {{ request()->is('laporan*') 
                ? 'bg-gray-800 text-white' 
                : 'hover:bg-gray-800 hover:text-white' }}">
            Laporan
        </a>

    </div>

    <!-- Footer kecil -->
    <div class="p-4 text-sm border-t border-gray-700 text-center">
        © 2026
    </div>

</div>