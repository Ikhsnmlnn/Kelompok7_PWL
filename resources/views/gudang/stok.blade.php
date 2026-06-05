@extends('layouts.app')

@section('content')

<h1 class="text-2xl font-bold mb-6">
    Monitoring Stok
</h1>

<div class="bg-white p-4 rounded shadow mb-4">

    <form class="flex gap-2">

        <input type="text"
               placeholder="Cari Produk..."
               class="border rounded px-3 h-9">

        <button class="bg-blue-500 text-white px-4 rounded">
            Cari
        </button>

    </form>

</div>

<table class="min-w-full bg-white rounded shadow">

    <thead class="bg-gray-100">

        <tr>
            <th class="p-2">No</th>
            <th class="p-2">Produk</th>
            <th class="p-2">Kategori</th>
            <th class="p-2">Stok</th>
            <th class="p-2">Status</th>
        </tr>

    </thead>

    <tbody>

        <tr class="border-t">
            <td class="p-2">1</td>
            <td class="p-2">Indomie Goreng</td>
            <td class="p-2">Makanan</td>
            <td class="p-2">120</td>
            <td class="p-2 text-green-500">Aman</td>
        </tr>

        <tr class="border-t">
            <td class="p-2">2</td>
            <td class="p-2">Aqua 600ml</td>
            <td class="p-2">Minuman</td>
            <td class="p-2">8</td>
            <td class="p-2 text-red-500">Menipis</td>
        </tr>

    </tbody>

</table>

@endsection