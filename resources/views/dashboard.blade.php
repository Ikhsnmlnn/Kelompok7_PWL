@extends('layouts.app')

@section('content')

<h1 class="text-2xl font-bold mb-6">
    Dashboard Admin
</h1>

{{-- =========================================
CARD UTAMA
========================================= --}}

<div class="grid grid-cols-1 md:grid-cols-2 gap-4 mb-6">

    <div class="bg-white p-5 rounded shadow">

        <p class="text-gray-500 mb-1">
            Omzet Bulan Ini
        </p>

        <h2 class="text-3xl font-bold">
            Rp {{ number_format($omzetBulanIni) }}
        </h2>

    </div>


    <div class="bg-white p-5 rounded shadow">

        <p class="text-gray-500 mb-1">
            Transaksi Bulan Ini
        </p>

        <h2 class="text-3xl font-bold">
            {{ $transaksiBulanIni }}
        </h2>

    </div>

</div>



{{-- =========================================
PERFORMA CABANG
========================================= --}}

<h2 class="text-xl font-bold mb-4">
    Performa Cabang Bulan Ini
</h2>

<div class="grid grid-cols-1 md:grid-cols-2 lg:grid-cols-3 gap-4 mb-6">

    @foreach($performaCabang as $p)

    <div class="bg-white p-5 rounded shadow">

        <h3 class="text-lg font-bold mb-2">
            {{ $p->nama_cabang }}
        </h3>

        <p class="text-gray-600">
            {{ $p->jumlah_transaksi }} transaksi
        </p>

        <p class="text-2xl font-bold mt-2">
            Rp {{ number_format($p->total_omzet) }}
        </p>

    </div>

    @endforeach

</div>



{{-- =========================================
PRODUK TERLARIS
========================================= --}}

<div class="bg-white p-5 rounded shadow">

    <h2 class="text-xl font-bold mb-4">
        Produk Paling Laku Bulan Ini
    </h2>

    <div class="space-y-3">

        @foreach($produkTerlaris as $index => $p)

        <div class="flex justify-between border-b pb-2">

            <div>

                <p class="font-semibold">
                    {{ $index + 1 }}. {{ $p->nama_produk }}
                </p>

            </div>

            <div class="font-bold">
                {{ $p->total_terjual }} terjual
            </div>

        </div>

        @endforeach

    </div>

</div>

@endsection