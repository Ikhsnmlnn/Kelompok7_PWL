@extends('layouts.app')

@section('content')

<h1 class="text-xl font-bold mb-4">
    Laporan Penjualan
</h1>



{{-- =========================================
FILTER
========================================= --}}

<form method="GET"
      class="bg-white p-3 rounded shadow mb-4 flex flex-wrap items-end gap-2">

    {{-- FILTER CEPAT --}}
    <select name="filter"
            class="border rounded px-3 h-9 text-sm">

        <option value="">Semua Data</option>

        <option value="hari_ini"
            {{ request('filter') == 'hari_ini' ? 'selected' : '' }}>
            Hari Ini
        </option>

        <option value="7_hari"
            {{ request('filter') == '7_hari' ? 'selected' : '' }}>
            7 Hari
        </option>

        <option value="bulan_ini"
            {{ request('filter') == 'bulan_ini' ? 'selected' : '' }}>
            Bulan Ini
        </option>

        <option value="tahun_ini"
            {{ request('filter') == 'tahun_ini' ? 'selected' : '' }}>
            Tahun Ini
        </option>

    </select>


    {{-- CUSTOM DATE --}}
    <input type="date"
           name="tanggal_mulai"
           value="{{ request('tanggal_mulai') }}"
           class="border rounded px-3 h-9 text-sm">


    <input type="date"
           name="tanggal_selesai"
           value="{{ request('tanggal_selesai') }}"
           class="border rounded px-3 h-9 text-sm">


    <button class="bg-blue-500 text-white px-4 h-9 rounded text-sm">
        Filter
    </button>

</form>



{{-- =========================================
CARD RINGKASAN
========================================= --}}

<div class="grid grid-cols-2 gap-3 mb-4">

    <div class="bg-white p-4 rounded shadow">

        <p class="text-sm text-gray-500">
            Total Omzet
        </p>

        <h2 class="text-2xl font-bold">
            Rp {{ number_format($totalOmzet) }}
        </h2>

    </div>


    <div class="bg-white p-4 rounded shadow">

        <p class="text-sm text-gray-500">
            Total Transaksi
        </p>

        <h2 class="text-2xl font-bold">
            {{ $totalTransaksi }}
        </h2>

    </div>

</div>



{{-- =========================================
DATA CABANG
========================================= --}}

<h2 class="text-lg font-bold mb-3">
    Laporan Per Cabang
</h2>

<div class="grid grid-cols-1 md:grid-cols-2 lg:grid-cols-3 gap-3">

    @foreach($laporan as $l)

    <div class="bg-white p-4 rounded shadow">

        <h3 class="font-bold text-base mb-1">
            {{ $l->nama_cabang }}
        </h3>

        <p class="text-sm text-gray-600">
            {{ $l->jumlah_transaksi }} transaksi
        </p>

        <p class="text-xl font-bold mt-1">
            Rp {{ number_format($l->total_omzet) }}
        </p>

    </div>

    @endforeach

</div>

@endsection