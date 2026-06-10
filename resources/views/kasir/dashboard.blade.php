@extends('layouts.app')

@section('content')

<h1 class="text-2xl font-bold mb-6">
    Dashboard Kasir
</h1>

<div class="grid grid-cols-3 gap-6">

    <div class="bg-white p-6 rounded-xl shadow">
        <h2 class="text-gray-500">Transaksi Hari Ini</h2>
        <p class="text-3xl font-bold mt-2">
            120
        </p>
    </div>

    <div class="bg-white p-6 rounded-xl shadow">
        <h2 class="text-gray-500">Omzet Hari Ini</h2>
        <p class="text-3xl font-bold mt-2">
            Rp 8.500.000
        </p>
    </div>

    <div class="bg-white p-6 rounded-xl shadow">
        <h2 class="text-gray-500">Produk Terjual</h2>
        <p class="text-3xl font-bold mt-2">
            320
        </p>
    </div>

</div>

@endsection