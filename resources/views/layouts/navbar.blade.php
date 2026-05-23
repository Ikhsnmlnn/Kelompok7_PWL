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

    <span>Admin</span>

</div>