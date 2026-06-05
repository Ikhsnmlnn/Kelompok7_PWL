@extends('layouts.app')

@section('content')

<h1 class="text-2xl font-bold mb-6">
    Riwayat Pergerakan Stok
</h1>

<table class="min-w-full bg-white rounded shadow">

    <thead class="bg-gray-100">

        <tr>
            <th class="p-2">No</th>
            <th class="p-2">Tanggal</th>
            <th class="p-2">Produk</th>
            <th class="p-2">Jenis</th>
            <th class="p-2">Jumlah</th>
            <th class="p-2">Petugas</th>
        </tr>

    </thead>

    <tbody>

        <tr class="border-t">
            <td class="p-2">1</td>
            <td class="p-2">01-06-2026</td>
            <td class="p-2">Indomie</td>
            <td class="p-2 text-green-500">Masuk</td>
            <td class="p-2">100</td>
            <td class="p-2">Gudang Jakarta</td>
        </tr>

        <tr class="border-t">
            <td class="p-2">2</td>
            <td class="p-2">01-06-2026</td>
            <td class="p-2">Aqua</td>
            <td class="p-2 text-red-500">Keluar</td>
            <td class="p-2">5</td>
            <td class="p-2">Gudang Jakarta</td>
        </tr>

    </tbody>

</table>

@endsection