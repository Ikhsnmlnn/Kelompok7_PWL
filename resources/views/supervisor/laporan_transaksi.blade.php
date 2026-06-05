@extends('layouts.app')

@section('content')

<h1 class="text-2xl font-bold mb-6">
    Laporan Transaksi
</h1>

<div class="bg-white p-5 rounded shadow mb-4">

    <form class="flex gap-2">

        <input type="date"
               class="border rounded px-3 py-2">

        <input type="date"
               class="border rounded px-3 py-2">

        <button class="bg-blue-500 text-white px-4 rounded">
            Filter
        </button>

    </form>

</div>

<div class="grid grid-cols-3 gap-4">

    <div class="bg-white p-5 rounded shadow">
        <p class="text-gray-500">
            Total Transaksi
        </p>

        <h2 class="text-3xl font-bold">
            560
        </h2>
    </div>

    <div class="bg-white p-5 rounded shadow">
        <p class="text-gray-500">
            Total Omzet
        </p>

        <h2 class="text-3xl font-bold text-green-600">
            Rp 75.000.000
        </h2>
    </div>

    <div class="bg-white p-5 rounded shadow">
        <p class="text-gray-500">
            Kasir Teraktif
        </p>

        <h2 class="text-xl font-bold">
            Kasir Jakarta
        </h2>
    </div>

</div>

@endsection