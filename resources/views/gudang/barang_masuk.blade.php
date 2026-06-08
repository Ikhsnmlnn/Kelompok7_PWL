@extends('layouts.app')

@section('content')

<h1 class="text-2xl font-bold mb-6">
    Input Barang Masuk
</h1>

<form class="bg-white p-6 rounded shadow">

    <div class="mb-4">
        <label>Tanggal</label>
        <input type="date"
               class="w-full border p-2 rounded">
    </div>

    <div class="mb-4">
        <label>Produk</label>
        <select class="w-full border p-2 rounded">
            <option>Indomie</option>
            <option>Aqua</option>
        </select>
    </div>

    <div class="mb-4">
        <label>Jumlah</label>
        <input type="number"
               class="w-full border p-2 rounded">
    </div>

    <div class="mb-4">
        <label>Keterangan</label>
        <textarea class="w-full border p-2 rounded"></textarea>
    </div>

    <button class="bg-green-500 text-white px-4 py-2 rounded">
        Simpan
    </button>

</form>

@endsection