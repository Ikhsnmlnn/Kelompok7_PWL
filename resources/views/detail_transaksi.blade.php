@extends('layouts.app')

@section('content')

<h1 class="text-2xl font-bold mb-4">
    Detail Transaksi
</h1>

<div class="bg-white p-4 rounded shadow mb-4">
    <p><strong>Kode:</strong> {{ $transaksi->kode_transaksi }}</p>
    <p><strong>Tanggal:</strong> {{ $transaksi->tanggal }}</p>
    <p><strong>User:</strong> {{ $transaksi->nama_user }}</p>
    <p><strong>Cabang:</strong> {{ $transaksi->nama_cabang }}</p>
    <p><strong>Total:</strong> Rp {{ $transaksi->total }}</p>
</div>

<table class="min-w-full bg-white rounded shadow">
    <thead>
        <tr>
            <th class="p-2">Produk</th>
            <th class="p-2">Jumlah</th>
            <th class="p-2">Harga</th>
            <th class="p-2">Subtotal</th>
        </tr>
    </thead>

    <tbody>
        @foreach($detail as $d)
        <tr class="border-t">
            <td class="p-2">{{ $d->nama_produk }}</td>
            <td class="p-2">{{ $d->jumlah }}</td>
            <td class="p-2">Rp {{ $d->harga }}</td>
            <td class="p-2">Rp {{ $d->subtotal }}</td>
        </tr>
        @endforeach
    </tbody>
</table>

@endsection