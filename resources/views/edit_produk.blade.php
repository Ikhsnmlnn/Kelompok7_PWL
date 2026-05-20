@extends('layouts.app')

@section('content')

<h1 class="text-2xl font-bold mb-4">Edit Produk</h1>

<form action="/produk/update/{{ $produk->id }}" method="POST"
      class="bg-white p-6 rounded shadow">

    @csrf

    <div class="mb-4">
        <label class="block mb-1">Nama Produk</label>

        <input type="text"
               name="nama_produk"
               value="{{ $produk->nama_produk }}"
               class="w-full border p-2 rounded">
    </div>

    <div class="mb-4">
        <label class="block mb-1">Harga</label>

        <input type="number"
               name="harga"
               value="{{ $produk->harga }}"
               class="w-full border p-2 rounded">
    </div>

    <div class="mb-4">
        <label class="block mb-1">Kategori</label>

        <select name="kategori_id" class="w-full border p-2 rounded">

            @foreach($kategori as $k)

                <option value="{{ $k->id }}"
                    {{ $produk->kategori_id == $k->id ? 'selected' : '' }}>

                    {{ $k->nama_kategori }}

                </option>

            @endforeach

        </select>
    </div>

    <button class="bg-yellow-500 text-white px-4 py-2 rounded">
        Update
    </button>

</form>

@endsection