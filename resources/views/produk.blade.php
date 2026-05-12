@extends('layouts.app')

@section('content')
<h1 class="text-2xl font-bold mb-4">Data Produk</h1>

<a href="/produk/tambah"
   class="bg-blue-500 text-white px-4 py-2 rounded mb-4 inline-block">
    Tambah Produk
</a>

<form method="GET" class="mb-4">

    <select name="cabang_id"
            class="border p-2 rounded">

        <option value="">Semua Cabang</option>

        @foreach($cabang as $c)
            <option value="{{ $c->id }}"
                {{ request('cabang_id') == $c->id ? 'selected' : '' }}>

                {{ $c->nama_cabang }}

            </option>
        @endforeach

    </select>

    <button class="bg-blue-500 text-white px-4 py-2 rounded">
        Filter
    </button>

</form>

<table class="min-w-full bg-white rounded shadow">
    <thead>
        <tr>
            <th class="p-2">Produk</th>
            <th class="p-2">Kategori</th>
            <th class="p-2">Cabang</th>
            <th class="p-2">Harga</th>
            <th class="p-2">Stok</th>
            <th class="p-2">Aksi</th>
        </tr>
    </thead>
    <tbody>
        @foreach($produk as $p)
        <tr class="border-t">

            <td class="p-2">{{ $p->nama_produk }}</td>
            <td class="p-2">{{ $p->nama_kategori }}</td>
            <td class="p-2">{{ $p->nama_cabang }}</td>
            <td class="p-2">Rp {{ $p->harga }}</td>
            <td class="p-2">{{ $p->stok }}</td>
            <td class="p-2 flex gap-2">
                <a href="/produk/edit/{{ $p->produk_id }}"
                class="bg-yellow-500 text-white px-3 py-1 rounded">
                    Edit
                </a>
                <a href="/produk/hapus/{{ $p->produk_id }}"
                onclick="return confirm('Yakin ingin menghapus produk?')"
                class="bg-red-500 text-white px-3 py-1 rounded">
                    Hapus
                </a>
            </td>
        </tr>
        @endforeach
    </tbody>
</table>

@endsection