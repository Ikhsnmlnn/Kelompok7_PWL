@extends('layouts.app')

@section('content')

<div class="flex flex-col h-[calc(100vh-120px)]">

    {{-- HEADER --}}
    <h1 class="text-2xl font-bold mb-4">
        Produk
    </h1>

    {{-- FILTER --}}
    <form method="GET"
          class="mb-4 flex flex-wrap items-center gap-2">

        {{-- TAMBAH PRODUK --}}
        <a href="/produk/tambah"
        class="bg-blue-500 text-white px-4 h-9 rounded text-sm inline-flex items-center">
            Tambah Produk
        </a>

        {{-- SEARCH --}}
        <input type="text"
               name="search"
               value="{{ request('search') }}"
               placeholder="Cari produk..."
               class="border rounded px-3 h-9 text-sm">


        {{-- FILTER CABANG --}}
        <select name="cabang_id"
                class="border rounded px-3 h-9 text-sm">

            <option value="">Semua Cabang</option>

            @foreach($cabang as $c)

                <option value="{{ $c->id }}"
                    {{ request('cabang_id') == $c->id ? 'selected' : '' }}>

                    {{ $c->nama_cabang }}

                </option>

            @endforeach

        </select>


        {{-- FILTER KATEGORI --}}
        <select name="kategori_id"
                class="border rounded px-3 h-9 text-sm">

            <option value="">Semua Kategori</option>

            @foreach($kategori as $k)

                <option value="{{ $k->id }}"
                    {{ request('kategori_id') == $k->id ? 'selected' : '' }}>

                    {{ $k->nama_kategori }}

                </option>

            @endforeach

        </select>


        <button class="bg-blue-500 text-white px-4 h-9 rounded text-sm">
            Filter
        </button>

    </form>



    {{-- TABLE AREA --}}
    <div class="flex flex-col flex-1">

        <div class="bg-white rounded shadow overflow-hidden">

            <table class="min-w-full">

                <thead class="bg-gray-100">

                    <tr>
                        <th class="p-2 text-left">No</th>
                        <th class="p-2 text-left">Produk</th>
                        <th class="p-2 text-left">Kategori</th>
                        <th class="p-2 text-left">Cabang</th>
                        <th class="p-2 text-left">Harga</th>
                        <th class="p-2 text-left">Stok</th>
                        <th class="p-2 text-left">Aksi</th>
                    </tr>

                </thead>

                <tbody>

                    @foreach($produk as $index => $p)

                    <tr class="border-t">

                        <td class="p-2">
                            {{ ($produk->currentPage() - 1) * $produk->perPage() + $index + 1 }}
                        </td>

                        <td class="p-2">
                            {{ $p->nama_produk }}
                        </td>

                        <td class="p-2">
                            {{ $p->nama_kategori }}
                        </td>

                        <td class="p-2">
                            {{ $p->nama_cabang }}
                        </td>

                        <td class="p-2">
                            Rp {{ number_format($p->harga) }}
                        </td>

                        <td class="p-2">
                            {{ $p->stok }}
                        </td>

                        <td class="p-2">

                            <div class="flex gap-2">

                                <a href="/produk/edit/{{ $p->id }}"
                                   class="bg-yellow-500 text-white px-3 py-1 rounded text-sm">
                                    Edit
                                </a>

                                <a href="/produk/hapus/{{ $p->produk_id }}"
                                   onclick="return confirm('Yakin ingin menghapus produk?')"
                                   class="bg-red-500 text-white px-3 py-1 rounded text-sm">
                                    Hapus
                                </a>

                            </div>

                        </td>

                    </tr>

                    @endforeach

                </tbody>

            </table>

        </div>



        {{-- PAGINATION --}}
        <div class="mt-auto pt-4 flex justify-end">

            {{ $produk->onEachSide(1)->links() }}

        </div>

    </div>

</div>

@endsection