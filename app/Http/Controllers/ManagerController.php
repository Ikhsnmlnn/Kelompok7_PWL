<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\RiwayatTransaksi;
use Barryvdh\DomPDF\Facade\Pdf;
use App\Models\Produk;

class ManagerController extends Controller
{
    // 🔥 HALAMAN LAPORAN
    public function laporan()
    {
        $transaksi = RiwayatTransaksi::latest()->get();

        $totalPendapatan = 0;
        $totalTransaksi = $transaksi->count();

        foreach ($transaksi as $t) {
            // sementara pakai dummy harga
            $totalPendapatan += $t->jumlah * 10000;
        }

        return view('manager.laporan', compact(
            'transaksi',
            'totalPendapatan',
            'totalTransaksi'
        ));
    }

    // 🔥 CETAK PDF
    public function cetakLaporan()
    {
        $transaksi = RiwayatTransaksi::latest()->get();

        $totalPendapatan = 0;
        $totalTransaksi = $transaksi->count();

        foreach ($transaksi as $t) {
            $totalPendapatan += $t->jumlah * 10000;
        }

        $pdf = Pdf::loadView('manager.laporan_pdf', compact(
            'transaksi',
            'totalPendapatan',
            'totalTransaksi'
        ));

        return $pdf->download('laporan-manager.pdf');
    }

    public function transaksi()
{
    $transaksi = \App\Models\RiwayatTransaksi::latest()->get();

    return view('manager.transaksi', compact('transaksi'));
}

public function stok()
{
    $produk = Produk::all();

    return view('manager.stok', compact('produk'));
}
}