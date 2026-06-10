@extends('layouts.app')

@section('content')

<h1 class="text-2xl font-bold mb-6">
    Monitoring Transaksi Cabang
</h1>

<div class="bg-white rounded-xl shadow overflow-hidden">

    <table class="min-w-full">

        <thead class="bg-gray-100">
            <tr>
                <th class="p-3 text-left">No</th>
                <th class="p-3 text-left">Produk</th>
                <th class="p-3 text-left">Jumlah</th>
                <th class="p-3 text-left">Tanggal</th>
                <th class="p-3 text-left">Total</th>
            </tr>
        </thead>

        <tbody>

            @forelse($transaksi as $i => $t)
            <tr class="border-t">
                <td class="p-3">{{ $i + 1 }}</td>
                <td class="p-3">{{ $t->produk }}</td>
                <td class="p-3">{{ $t->jumlah }}</td>
                <td class="p-3">{{ $t->created_at->format('d-m-Y') }}</td>
                <td class="p-3">
                    Rp {{ number_format($t->jumlah * 10000) }}
                </td>
            </tr>
            @empty
            <tr>
                <td colspan="5" class="p-3 text-center">
                    Tidak ada transaksi
                </td>
            </tr>
            @endforelse

        </tbody>

    </table>

</div>

@endsection