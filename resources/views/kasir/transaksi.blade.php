@extends('layouts.app')

@section('content')
@if(session('success'))

<style>
@keyframes pop {
    0% {
        transform: scale(0.3);
        opacity: 0;
    }
    70% {
        transform: scale(1.1);
    }
    100% {
        transform: scale(1);
        opacity: 1;
    }
}
</style>

<div id="notif"
     class="fixed inset-0 flex items-center justify-center bg-black/40 z-50">

    <div class="bg-white rounded-2xl shadow-2xl p-8 text-center animate-popup">

        <div style="animation: pop .4s ease-out;"
             class="w-20 h-20 mx-auto bg-green-500 rounded-full flex items-center justify-center text-white text-4xl mb-4">
            ✓
        </div>

        <h2 class="text-xl font-bold text-gray-800">
            Berhasil!
        </h2>

        <p class="text-gray-500 mt-2">
            {{ session('success') }}
        </p>

    </div>

</div>

<script>
setTimeout(() => {
    document.getElementById('notif').remove();
}, 2500);
</script>

@endif
<div class="flex justify-between items-center mb-4">

    <h1 class="text-2xl font-bold">
        Transaksi Penjualan
    </h1>

    <div class="flex gap-2">

        <a href="/kasir/transaksi-baru"
           class="bg-green-500 text-white px-4 py-2 rounded">
            Transaksi Baru
        </a>


    </div>

</div>

<div class="bg-white rounded-xl shadow p-4 mb-4">

    <form method="GET">

        <input type="text"
               name="search"
               value="{{ request('search') }}"
               placeholder="Cari produk..."
               class="border rounded px-3 py-2 w-80">

        <button class="bg-blue-500 text-white px-4 py-2 rounded">
            Cari
        </button>

    </form>

</div>

<div class="bg-white rounded-xl shadow overflow-hidden">

    <table class="min-w-full">

        <thead class="bg-gray-100">

            <tr>
                <th class="p-3 text-left">No</th>
                <th class="p-3 text-left">Produk</th>
                <th class="p-3 text-left">Harga</th>
            </tr>

        </thead>

        <tbody>

            @forelse($produk as $index => $p)

            <tr class="border-t">

                <td class="p-3">
                    {{ $index + 1 }}
                </td>

                <td class="p-3">
                    {{ $p->nama_produk }}
                </td>

                <td class="p-3">
                    Rp {{ number_format($p->harga) }}
                </td>

            </tr>

            @empty

            <tr>
                <td colspan="3" class="text-center p-5 text-gray-500">
                    Produk tidak ditemukan
                </td>
            </tr>

            @endforelse

        </tbody>

    </table>

</div>

@endsection