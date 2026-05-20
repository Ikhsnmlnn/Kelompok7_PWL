@extends('layouts.app')

@section('content')

{{-- =========================================
CARD UTAMA
========================================= --}}

<div class="grid grid-cols-2 gap-2 mb-3">

    <div class="bg-white p-3 rounded shadow">

        <p class="text-xs text-gray-500">
            Omzet Bulan Ini
        </p>

        <h2 class="text-lg font-bold">
            Rp {{ number_format($omzetBulanIni) }}
        </h2>

    </div>


    <div class="bg-white p-3 rounded shadow">

        <p class="text-xs text-gray-500">
            Transaksi Bulan Ini
        </p>

        <h2 class="text-lg font-bold">
            {{ $transaksiBulanIni }}
        </h2>

    </div>

</div>



{{-- =========================================
PERFORMA CABANG (Ukurannya diperkecil & dibuat berjejer ke samping)
========================================= --}}

<h2 class="text-sm font-bold mb-2">
    Performa Cabang
</h2>

<div class="grid grid-cols-2 sm:grid-cols-3 md:grid-cols-5 gap-2 mb-3">

    @foreach($performaCabang as $p)

    <div class="bg-white p-2.5 rounded shadow">

        <h3 class="font-bold text-xs mb-0.5 truncate">
            {{ $p->nama_cabang }}
        </h3>

        <p class="text-[11px] text-gray-600">
            {{ $p->jumlah_transaksi }} transaksi
        </p>

        <p class="text-sm font-bold mt-0.5">
            Rp {{ number_format($p->total_omzet) }}
        </p>

    </div>

    @endforeach

</div>



{{-- =========================================
PRODUK TERLARIS
========================================= --}}

<div class="bg-white p-3 rounded shadow">

    <h2 class="text-sm font-bold mb-2">
        Produk Paling Laku
    </h2>

    <div class="space-y-1">

        @foreach($produkTerlaris as $index => $p)

        <div class="flex justify-between text-xs border-b pb-1">

            <p class="font-medium">
                {{ $index + 1 }}. {{ $p->nama_produk }}
            </p>

            <p class="font-bold">
                {{ $p->total_terjual }}
            </p>

        </div>

        @endforeach

    </div>

</div>

@endsection