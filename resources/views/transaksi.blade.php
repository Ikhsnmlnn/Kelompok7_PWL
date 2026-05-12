@extends('layouts.app')

@section('content')
<h1 class="text-2xl font-bold mb-4">Data Transaksi</h1>

<form method="GET" class="mb-4 flex gap-2">

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

    <input type="date"
           name="tanggal_awal"
           value="{{ request('tanggal_awal') }}"
           class="border p-2 rounded">

    <input type="date"
           name="tanggal_akhir"
           value="{{ request('tanggal_akhir') }}"
           class="border p-2 rounded">

    <button class="bg-blue-500 text-white px-4 py-2 rounded">
        Filter
    </button>

</form>

<table class="min-w-full bg-white rounded shadow">
    <thead>
        <tr>
            <th class="p-2">Kode</th>
            <th class="p-2">Tanggal</th>
            <th class="p-2">User</th>
            <th class="p-2">Cabang</th>
            <th class="p-2">Total</th>
            <th class="p-2">Aksi</th>
        </tr>
    </thead>
    <tbody>
        @foreach($transaksi as $t)
        <tr class="border-t">
            <td class="p-2">{{ $t->kode_transaksi }}</td>
            <td class="p-2">{{ $t->tanggal }}</td>
            <td class="p-2">{{ $t->nama_user }}</td>
            <td class="p-2">{{ $t->nama_cabang }}</td>
            <td class="p-2">Rp {{ $t->total }}</td>
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