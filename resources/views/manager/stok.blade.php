@extends('layouts.app')

@section('content')

<h1 class="text-2xl font-bold mb-6">
    Monitoring Stok Cabang
</h1>

<div class="bg-white rounded-xl shadow overflow-hidden">

    <table class="min-w-full">

        <thead class="bg-gray-100">
            <tr>
                <th class="p-3 text-left">No</th>
                <th class="p-3 text-left">Produk</th>
                <th class="p-3 text-left">Kategori</th>
                <th class="p-3 text-left">Stok</th>
            </tr>
        </thead>

        <tbody>

            @forelse($produk as $i => $p)
            <tr class="border-t">
                <td class="p-3">{{ $i + 1 }}</td>
                <td class="p-3">{{ $p->nama_produk }}</td>
                <td class="p-3">{{ $p->kategori ?? '-' }}</td>
                <td class="p-3">{{ $p->stok }}</td>
            </tr>
            @empty
            <tr>
                <td colspan="4" class="p-3 text-center">
                    Data produk kosong
                </td>
            </tr>
            @endforelse

        </tbody>

    </table>

</div>

@endsection