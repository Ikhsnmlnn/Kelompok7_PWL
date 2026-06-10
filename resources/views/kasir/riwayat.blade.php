@extends('layouts.app')

@section('content')

@if(session('success'))
<div id="notif"
     class="fixed inset-0 flex items-center justify-center bg-black/40 z-50">
    <div class="bg-green-500 text-white px-8 py-5 rounded-xl shadow-xl text-lg">
        ✅ {{ session('success') }}
    </div>
</div>

<script>
setTimeout(() => {
    document.getElementById('notif').remove();
}, 2000);
</script>
@endif

<h1 class="text-2xl font-bold mb-6">
    Riwayat Transaksi
</h1>

<div class="bg-white rounded-xl shadow overflow-hidden">

    <table class="min-w-full">

        <thead class="bg-gray-100">
            <tr>
                <th class="p-3 text-left">No</th>
                <th class="p-3 text-left">Produk</th>
                <th class="p-3 text-left">Jumlah</th>
                <th class="p-3 text-left">Tanggal</th>
            </tr>
        </thead>

        <tbody>

            @forelse($riwayat as $index => $item)
            <tr class="border-t">

                <td class="p-3">
                    {{ $index + 1 }}
                </td>

                <td class="p-3">
                    {{ $item->produk }}
                </td>

                <td class="p-3">
                    {{ $item->jumlah }}
                </td>

                <td class="p-3">
                    {{ $item->created_at->format('d-m-Y H:i') }}
                </td>

            </tr>
            @empty
            <tr>
                <td colspan="4" class="p-5 text-center text-gray-500">
                    Belum ada transaksi
                </td>
            </tr>
            @endforelse

        </tbody>

    </table>

</div>

@endsection