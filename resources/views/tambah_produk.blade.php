@extends('layouts.app')

@section('content')

<h1 class="text-2xl font-bold mb-4">Tambah Produk</h1>

<form action="/produk/store" method="POST" class="bg-white p-6 rounded shadow">
    @csrf

    <div class="mb-4">
        <label class="block mb-1">Nama Produk</label>
        <input type="text" name="nama_produk" class="w-full border p-2 rounded">
    </div>

    <div class="mb-4">
        <label class="block mb-1">Harga</label>
        <input type="number" name="harga" class="w-full border p-2 rounded">
    </div>

    <div class="mb-4">
        <label class="block mb-1">Stok</label>
        <input type="number" name="stok" class="w-full border p-2 rounded">
    </div>

    <div class="mb-4">
        <label class="block mb-1">Kategori</label>

        <select name="kategori_id" class="w-full border p-2 rounded">
            @foreach($kategori as $k)
                <option value="{{ $k->id }}">
                    {{ $k->nama_kategori }}
                </option>
            @endforeach
        </select>
    </div>

    <div class="mb-4">
        <label class="block mb-1">Cabang</label>

        <select name="cabang_id" class="w-full border p-2 rounded">

            @foreach($cabang as $c)
                <option value="{{ $c->id }}">
                    {{ $c->nama_cabang }}
                </option>
            @endforeach

        </select>
    </div>

    <button class="bg-blue-500 text-white px-4 py-2 rounded">
        Simpan
    </button>
</form>

@endsection