<div class="bg-white shadow p-4 flex justify-between sticky top-0 z-20">

    @php

        $title = 'Dashboard';

        if (request()->is('produk*')) {
            $title = 'Produk';
        }

        elseif (request()->is('transaksi*')) {
            $title = 'Transaksi';
        }

        elseif (request()->is('laporan*')) {
            $title = 'Laporan';
        }

    @endphp

    <h1 class="text-2xl font-bold text-gray-800">
    {{ $title }}
</h1>

    <div class="flex items-center gap-4">

        <span class="font-semibold">
            {{ ucfirst(auth()->user()->role) }}
        </span>

        <a href="/logout"
        class="bg-red-500 text-white px-3 py-1 rounded text-sm">
            Logout
        </a>

    </div>

</div>