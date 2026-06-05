@extends('layouts.app')

@section('content')

<h1 class="text-2xl font-bold mb-6">
    Dashboard Supervisor
</h1>

<div class="grid grid-cols-3 gap-4">

    <div class="bg-white p-5 rounded shadow">
        <p class="text-gray-500 text-sm">
            Transaksi Hari Ini
        </p>

        <h2 class="text-3xl font-bold">
            125
        </h2>
    </div>

    <div class="bg-white p-5 rounded shadow">
        <p class="text-gray-500 text-sm">
            Kasir Aktif
        </p>

        <h2 class="text-3xl font-bold">
            8
        </h2>
    </div>

    <div class="bg-white p-5 rounded shadow">
        <p class="text-gray-500 text-sm">
            Omzet Hari Ini
        </p>

        <h2 class="text-3xl font-bold text-green-600">
            Rp 15.250.000
        </h2>
    </div>

</div>

@endsection