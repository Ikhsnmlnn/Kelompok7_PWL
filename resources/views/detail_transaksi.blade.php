@extends('layouts.app')

@section('content')

<div class="flex flex-col h-full">

    {{-- HEADER --}}
    <div class="flex items-center justify-between mb-4">

        <div>

            <h1 class="text-2xl font-bold text-gray-800">
                Detail Transaksi
            </h1>

            <p class="text-sm text-gray-500 mt-1">
                {{ $transaksi->kode_transaksi }}
            </p>

        </div>

    </div>



    {{-- INFORMASI TRANSAKSI --}}
    <div class="bg-white rounded-xl shadow border border-gray-100 p-5 mb-4">

        <div class="grid grid-cols-2 gap-4 text-sm">

            <div>
                <p class="text-gray-500 mb-1">
                    Kode Transaksi
                </p>

                <p class="font-semibold text-gray-800">
                    {{ $transaksi->kode_transaksi }}
                </p>
            </div>


            <div>
                <p class="text-gray-500 mb-1">
                    Tanggal
                </p>

                <p class="font-semibold text-gray-800">
                    {{ $transaksi->tanggal }}
                </p>
            </div>


            <div>
                <p class="text-gray-500 mb-1">
                    Kasir
                </p>

                <p class="font-semibold text-gray-800">
                    {{ $transaksi->nama_user }}
                </p>
            </div>


            <div>
                <p class="text-gray-500 mb-1">
                    Cabang
                </p>

                <p class="font-semibold text-gray-800">
                    {{ $transaksi->nama_cabang }}
                </p>
            </div>

        </div>


        {{-- TOTAL --}}
        <div class="mt-5 pt-4 border-t">

            <p class="text-sm text-gray-500 mb-1">
                Total Transaksi
            </p>

            <p class="text-2xl font-bold text-green-600">
                Rp {{ number_format($transaksi->total) }}
            </p>

        </div>

    </div>



    {{-- TABLE --}}
    <div class="flex flex-col flex-1">

        <div class="bg-white rounded-xl shadow overflow-hidden border border-gray-100">

            <table class="min-w-full">

                <thead class="bg-gray-50 text-gray-700">

                    <tr>

                        <th class="p-3 text-left text-sm font-semibold">
                            No
                        </th>

                        <th class="p-3 text-left text-sm font-semibold">
                            Produk
                        </th>

                        <th class="p-3 text-left text-sm font-semibold">
                            Jumlah
                        </th>

                        <th class="p-3 text-left text-sm font-semibold">
                            Harga
                        </th>

                        <th class="p-3 text-left text-sm font-semibold">
                            Subtotal
                        </th>

                    </tr>

                </thead>

                <tbody>

                    @foreach($detail as $index => $d)

                    <tr class="border-t hover:bg-gray-50 transition">

                        <td class="p-3 text-sm text-gray-700">
                            {{ $index + 1 }}
                        </td>

                        <td class="p-3 text-sm font-medium text-gray-800">
                            {{ $d->nama_produk }}
                        </td>

                        <td class="p-3 text-sm text-gray-700">
                            {{ $d->jumlah }}
                        </td>

                        <td class="p-3 text-sm text-gray-700">
                            Rp {{ number_format($d->harga) }}
                        </td>

                        <td class="p-3 text-sm font-semibold text-gray-800">
                            Rp {{ number_format($d->subtotal) }}
                        </td>

                    </tr>

                    @endforeach

                </tbody>

            </table>

        </div>



        {{-- FOOTER --}}
        <div class="mt-auto pt-4 flex justify-start">

            <a href="{{ url()->previous() }}"
               class="bg-gray-500 hover:bg-gray-600 text-white px-4 h-9 rounded text-sm inline-flex items-center transition">

                Kembali

            </a>

        </div>

    </div>

</div>

@endsection