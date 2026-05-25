<?php

namespace App\Http\Controllers;

use Illuminate\Support\Facades\DB;

class DashboardController extends Controller
{
    public function index()
    {
        // =========================================
        // OMZET BULAN INI
        // =========================================

        $omzetBulanIni = DB::table('transaksi')
            ->whereMonth('tanggal', now()->month)
            ->whereYear('tanggal', now()->year)
            ->sum('total');


        // =========================================
        // TRANSAKSI BULAN INI
        // =========================================

        $transaksiBulanIni = DB::table('transaksi')
            ->whereMonth('tanggal', now()->month)
            ->whereYear('tanggal', now()->year)
            ->count();


        // =========================================
        // PERFORMA CABANG BULAN INI
        // =========================================

        $performaCabang = DB::table('transaksi')
            ->join('cabang', 'transaksi.cabang_id', '=', 'cabang.id')
            ->select(
                'cabang.nama_cabang',
                DB::raw('COUNT(transaksi.id) as jumlah_transaksi'),
                DB::raw('SUM(transaksi.total) as total_omzet')
            )
            ->whereMonth('transaksi.tanggal', now()->month)
            ->whereYear('transaksi.tanggal', now()->year)
            ->groupBy('cabang.nama_cabang')
            ->orderByDesc('total_omzet')
            ->limit(5)
            ->get();


        // =========================================
        // PRODUK PALING LAKU BULAN INI
        // =========================================

        $produkTerlaris = DB::table('detail_transaksi')
            ->join('produk', 'detail_transaksi.produk_id', '=', 'produk.id')
            ->join('transaksi', 'detail_transaksi.transaksi_id', '=', 'transaksi.id')
            ->select(
                'produk.nama_produk',
                DB::raw('SUM(detail_transaksi.jumlah) as total_terjual')
            )
            ->whereMonth('transaksi.tanggal', now()->month)
            ->whereYear('transaksi.tanggal', now()->year)
            ->groupBy('produk.nama_produk')
            ->orderByDesc('total_terjual')
            ->limit(5)
            ->get();


        return view('admin.dashboard', compact(
            'omzetBulanIni',
            'transaksiBulanIni',
            'performaCabang',
            'produkTerlaris'
        ));
    }
}