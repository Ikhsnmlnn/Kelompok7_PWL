@extends('layouts.app')

@section('content')

<div class="flex flex-col h-full">

    <h1 class="text-2xl font-bold mb-4">
        Transaksi Cabang {{ $cabang->nama_cabang }}
    </h1>



    {{-- TABLE AREA --}}
    <div class="flex flex-col flex-1">

        <div class="bg-white rounded shadow overflow-hidden">

            <table class="min-w-full">

                <thead class="bg-gray-100">

                    <tr>
                        <th class="p-2 text-left">No</th>
                        <th class="p-2 text-left">Kode</th>
                        <th class="p-2 text-left">Tanggal</th>
                        <th class="p-2 text-left">Kasir</th>
                        <th class="p-2 text-left">Total</th>
                        <th class="p-2 text-left">Aksi</th>
                    </tr>

                </thead>

                <tbody>

                    @foreach($transaksi as $index => $t)

                    <tr class="border-t">

                        <td class="p-2">
                            {{ ($transaksi->currentPage() - 1) * $transaksi->perPage() + $index + 1 }}
                        </td>

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
                               class="bg-green-500 text-white px-3 py-1 rounded text-sm">

                                Detail

                            </a>

                        </td>

                    </tr>

                    @endforeach

                </tbody>

            </table>

        </div>



        {{-- PAGINATION --}}
        <div class="mt-auto pt-4 flex justify-between items-center">

            {{-- BACK --}}
            <a href="/transaksi?
                filter={{ request('filter') }}
                &tanggal_awal={{ request('tanggal_awal') }}
                &tanggal_akhir={{ request('tanggal_akhir') }}"
            class="bg-gray-500 text-white px-4 h-9 rounded text-sm inline-flex items-center">

                Kembali

            </a>


            {{-- PAGINATION --}}
            <div>
                {{ $transaksi->onEachSide(1)->links() }}
            </div>

        </div>

    </div>

</div>

@endsection