@extends('layouts.app')

@section('content')

<h1 class="text-2xl font-bold mb-6">
    Pilih Barang
</h1>

<div class="bg-white rounded-xl shadow p-6">

    {{-- Search --}}
    <div class="mb-5">
        <input type="text"
               id="search"
               placeholder="Cari Barang..."
               class="w-full border rounded-lg p-3">
    </div>

    <form action="/kasir/pembayaran" method="POST">
        @csrf

        <div class="grid grid-cols-1 md:grid-cols-2 lg:grid-cols-3 gap-4">

            @foreach($produk as $p)

            <div class="border rounded-xl p-4 shadow-sm produk-card">

                <h3 class="font-bold text-lg">
                    {{ $p->nama_produk }}
                </h3>

                <p class="mt-2 text-gray-600">
                    Harga : Rp {{ number_format($p->harga) }}
                </p>

                <div class="mt-3">

                    <label class="flex items-center gap-2 mb-2">
                        <input type="checkbox"
                               name="pilih[]"
                               value="{{ $p->id }}">
                        Pilih Barang
                    </label>

                    <input type="number"
                           name="jumlah[{{ $p->id }}]"
                           min="0"
                           placeholder="Jumlah"
                           class="w-full border rounded p-2">

                </div>

            </div>

            @endforeach

        </div>

        <div class="mt-6 flex justify-end">
            <button type="submit"
                    class="bg-blue-500 hover:bg-blue-600 text-white px-6 py-3 rounded-lg">
                Lanjut Pembayaran →
            </button>
        </div>

    </form>

</div>

<script>
document.getElementById('search').addEventListener('keyup', function() {

    let keyword = this.value.toLowerCase();

    document.querySelectorAll('.produk-card').forEach(card => {

        let nama = card.querySelector('h3').innerText.toLowerCase();

        card.style.display = nama.includes(keyword) ? '' : 'none';

    });

});
</script>

@endsection