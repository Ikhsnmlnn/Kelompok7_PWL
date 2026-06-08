@extends('layouts.app')

@section('content')

<h1 class="text-2xl font-bold mb-6">
    Data Kasir
</h1>

<table class="min-w-full bg-white rounded shadow">

    <thead class="bg-gray-100">

        <tr>
            <th class="p-3">No</th>
            <th class="p-3">Nama</th>
            <th class="p-3">Email</th>
            <th class="p-3">Jumlah Transaksi</th>
        </tr>

    </thead>

    <tbody>

        <tr class="border-t">
            <td class="p-3">1</td>
            <td class="p-3">Kasir Jakarta</td>
            <td class="p-3">kasir.jakarta@gmail.com</td>
            <td class="p-3">325</td>
        </tr>

    </tbody>

</table>

@endsection