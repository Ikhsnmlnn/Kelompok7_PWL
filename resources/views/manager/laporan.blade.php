@extends('layouts.app')

@section('content')

<h1 class="text-2xl font-bold mb-6">
    Laporan Cabang (Manager)
</h1>

<div class="grid grid-cols-2 gap-6">

    <div class="bg-white rounded-xl shadow p-6">
        <h2 class="font-semibold mb-3">Total Pendapatan</h2>
        <p class="text-3xl font-bold text-green-600">
            Rp {{ number_format($totalPendapatan) }}
        </p>
    </div>

    <div class="bg-white rounded-xl shadow p-6">
        <h2 class="font-semibold mb-3">Total Transaksi</h2>
        <p class="text-3xl font-bold">
            {{ $totalTransaksi }}
        </p>
    </div>

</div>

<div class="mt-6">
    <a href="/manager/laporan/pdf"
       class="bg-blue-500 text-white px-4 py-2 rounded">
        Cetak Laporan PDF
    </a>
</div>

@endsection