@extends('layouts.app')

@section('content')

<h1 class="text-2xl font-bold mb-6">
    Dashboard Gudang
</h1>

<div class="grid grid-cols-4 gap-4 mb-6">

    <div class="bg-white p-5 rounded shadow">
        <p class="text-gray-500 text-sm">Total Produk</p>
        <h2 class="text-3xl font-bold">250</h2>
    </div>

    <div class="bg-white p-5 rounded shadow">
        <p class="text-gray-500 text-sm">Total Stok</p>
        <h2 class="text-3xl font-bold">12.540</h2>
    </div>

    <div class="bg-white p-5 rounded shadow">
        <p class="text-gray-500 text-sm">Stok Menipis</p>
        <h2 class="text-3xl font-bold text-red-500">15</h2>
    </div>

    <div class="bg-white p-5 rounded shadow">
        <p class="text-gray-500 text-sm">Barang Masuk Hari Ini</p>
        <h2 class="text-3xl font-bold text-green-500">120</h2>
    </div>

</div>

@endsection