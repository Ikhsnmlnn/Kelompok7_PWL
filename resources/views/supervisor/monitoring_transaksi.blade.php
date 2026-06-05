@extends('layouts.app')

@section('content')

<h1 class="text-2xl font-bold mb-6">
    Monitoring Transaksi
</h1>

<table class="min-w-full bg-white rounded shadow">

    <thead class="bg-gray-100">

        <tr>
            <th class="p-3">No</th>
            <th class="p-3">Kode</th>
            <th class="p-3">Tanggal</th>
            <th class="p-3">Kasir</th>
            <th class="p-3">Total</th>
            <th class="p-3">Status</th>
        </tr>

    </thead>

    <tbody>

        <tr class="border-t">
            <td class="p-3">1</td>
            <td class="p-3">TRX001</td>
            <td class="p-3">01-06-2026</td>
            <td class="p-3">Kasir Jakarta</td>
            <td class="p-3">Rp 250.000</td>
            <td class="p-3 text-green-600">
                Sukses
            </td>
        </tr>

    </tbody>

</table>

@endsection