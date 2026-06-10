<!DOCTYPE html>
<html>
<head>
    <title>Laporan Manager</title>
    <style>
        body { font-family: sans-serif; }
        table { width: 100%; border-collapse: collapse; margin-top: 20px; }
        table, th, td { border: 1px solid black; }
        th, td { padding: 8px; }
    </style>
</head>
<body>

<h2>Laporan Transaksi</h2>

<p>Total Pendapatan: Rp {{ number_format($totalPendapatan) }}</p>
<p>Total Transaksi: {{ $totalTransaksi }}</p>

<table>
    <thead>
        <tr>
            <th>No</th>
            <th>Produk</th>
            <th>Jumlah</th>
        </tr>
    </thead>
    <tbody>
        @foreach($transaksi as $i => $t)
        <tr>
            <td>{{ $i + 1 }}</td>
            <td>{{ $t->produk }}</td>
            <td>{{ $t->jumlah }}</td>
        </tr>
        @endforeach
    </tbody>
</table>

</body>
</html>