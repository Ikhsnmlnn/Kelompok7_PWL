@extends('layouts.app')

@section('content')

<h1 class="text-2xl font-bold mb-4">
    Transaksi Cabang {{ $cabang->nama_cabang }}
</h1>

<table class="min-w-full bg-white rounded shadow">
    <thead>
        <tr>
            <th class="p-2">Kode</th>
            <th class="p-2">Tanggal</th>
            <th class="p-2">Kasir</th>
            <th class="p-2">Total</th>
            <th class="p-2">Aksi</th>
        </tr>
    </thead>

    <tbody>
        @foreach($transaksi as $t)
        <tr class="border-t">

            <td class="p-2">
                {{ $t->kode_transaksi }}
            </td>

            <td class="p-2">
                {{ $t->tanggal }}
            </td>

            <td class="p-2">
                {{ $t->nama_user }}
            </td>

            <td class="p-2">
                Rp {{ number_format($t->total) }}
            </td>

            <td class="p-2">
                <a href="/transaksi/detail/{{ $t->id }}"
                   class="bg-green-500 text-white px-3 py-1 rounded">

                    Detail

                </a>
            </td>

        </tr>
        @endforeach
    </tbody>
</table>

<div class="mt-4">
    {{ $transaksi->links() }}
</div>

@endsection