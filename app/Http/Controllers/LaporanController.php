<?php

namespace App\Http\Controllers;

use Illuminate\Support\Facades\DB;
use Illuminate\Http\Request;

class LaporanController extends Controller
{
    public function index(Request $request)
    {
        // =========================================
        // FILTER WAKTU
        // =========================================

        $filter = $request->filter;


        // =========================================
        // QUERY DASAR
        // =========================================

        $query = DB::table('transaksi')
            ->join('cabang', 'transaksi.cabang_id', '=', 'cabang.id')
            ->select(
                'cabang.nama_cabang',
                DB::raw('COUNT(transaksi.id) as jumlah_transaksi'),
                DB::raw('SUM(transaksi.total) as total_omzet')
            );


        // =========================================
        // FILTER CEPAT
        // =========================================

        if ($filter == 'hari_ini') {

            $query->whereDate('tanggal', today());

        } elseif ($filter == '7_hari') {

            $query->whereBetween('tanggal', [
                now()->subDays(7),
                now()
            ]);

        } elseif ($filter == 'bulan_ini') {

            $query->whereMonth('tanggal', now()->month)
                  ->whereYear('tanggal', now()->year);

        } elseif ($filter == 'tahun_ini') {

            $query->whereYear('tanggal', now()->year);
        }


        // =========================================
        // FILTER CUSTOM
        // =========================================

        if ($request->tanggal_mulai && $request->tanggal_selesai) {

            $query->whereBetween('tanggal', [
                $request->tanggal_mulai,
                $request->tanggal_selesai
            ]);
        }


        // =========================================
        // DATA LAPORAN
        // =========================================

        $laporan = $query
            ->groupBy('cabang.nama_cabang')
            ->orderByDesc('total_omzet')
            ->get();


        // =========================================
        // TOTAL
        // =========================================

        $totalOmzet = $laporan->sum('total_omzet');

        $totalTransaksi = $laporan->sum('jumlah_transaksi');


        return view('laporan', compact(
            'laporan',
            'totalOmzet',
            'totalTransaksi'
        ));
    }
}