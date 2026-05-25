@extends('layouts.app')

@section('content')

<h1 class="text-2xl font-bold mb-4">
    Edit Produk
</h1>

<form action="/produk/update/{{ $data->stok_id }}"
      method="POST"
      class="bg-white p-6 rounded shadow">

    @csrf


    {{-- NAMA PRODUK --}}
    <div class="mb-4">

        <label class="block mb-1">
            Nama Produk
        </label>

        <input type="text"
               name="nama_produk"
               value="{{ $data->nama_produk }}"
               class="w-full border p-2 rounded">

    </div>



    {{-- HARGA --}}
    <div class="mb-4">

        <label class="block mb-1">
            Harga
        </label>

        <input type="number"
               name="harga"
               value="{{ $data->harga }}"
               class="w-full border p-2 rounded">

    </div>



    {{-- KATEGORI --}}
    <div class="mb-4">

        <label class="block mb-1">
            Kategori
        </label>

        <select name="kategori_id"
                class="w-full border p-2 rounded">

            @foreach($kategori as $k)

                <option value="{{ $k->id }}"
                    {{ $data->kategori_id == $k->id ? 'selected' : '' }}>

                    {{ $k->nama_kategori }}

                </option>

            @endforeach

        </select>

    </div>



    {{-- CABANG --}}
    <div class="mb-4">

        <label class="block mb-1">
            Cabang
        </label>

        <input type="text"
               value="{{ $data->nama_cabang }}"
               disabled
               class="w-full border p-2 rounded bg-gray-100">

    </div>



    {{-- STOK --}}
    <div class="mb-6">

        <label class="block mb-1">
            Stok
        </label>

        <input type="number"
               name="stok"
               value="{{ $data->stok }}"
               class="w-full border p-2 rounded">

    </div>



    {{-- BUTTON --}}
    <div class="flex gap-2">

        <button class="bg-yellow-500 text-white px-4 py-2 rounded">
            Update
        </button>

        <a href="/produk"
           class="bg-gray-500 text-white px-4 py-2 rounded">
            Batal
        </a>

    </div>

</form>

@endsection