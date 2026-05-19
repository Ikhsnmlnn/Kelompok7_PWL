<?php

namespace App\Http\Controllers;

use Illuminate\Support\Facades\DB;
use Illuminate\Http\Request;

class TransaksiController extends Controller
{
    // =========================================
    // HALAMAN RINGKASAN TRANSAKSI PER CABANG
    // =========================================
    public function index()
    {
        $transaksi = DB::table('transaksi')
            ->join('cabang', 'transaksi.cabang_id', '=', 'cabang.id')
            ->select(
                'cabang.id',
                'cabang.nama_cabang',
                DB::raw('COUNT(transaksi.id) as jumlah_transaksi'),
                DB::raw('SUM(transaksi.total) as total_pendapatan'),
                DB::raw('MAX(transaksi.tanggal) as transaksi_terakhir')
            )
            ->groupBy('cabang.id', 'cabang.nama_cabang')
            ->get();

        return view('transaksi', compact('transaksi'));
    }


    // =========================================
    // HALAMAN TRANSAKSI BERDASARKAN CABANG
    // =========================================
    public function cabang($id)
    {
        $transaksi = DB::table('transaksi')
            ->join('users', 'transaksi.user_id', '=', 'users.id')
            ->join('cabang', 'transaksi.cabang_id', '=', 'cabang.id')
            ->select(
                'transaksi.*',
                'users.name as nama_user',
                'cabang.nama_cabang'
            )
            ->where('transaksi.cabang_id', $id)
            ->orderBy('tanggal', 'desc')
            ->paginate(10);

        $cabang = DB::table('cabang')
            ->where('id', $id)
            ->first();

        return view('transaksi_cabang', compact('transaksi', 'cabang'));
    }


    // =========================================
    // DETAIL ISI TRANSAKSI
    // =========================================
    public function detail($id)
    {
        $transaksi = DB::table('transaksi')
            ->join('users', 'transaksi.user_id', '=', 'users.id')
            ->join('cabang', 'transaksi.cabang_id', '=', 'cabang.id')
            ->select(
                'transaksi.*',
                'users.name as nama_user',
                'cabang.nama_cabang'
            )
            ->where('transaksi.id', $id)
            ->first();

        $detail = DB::table('detail_transaksi')
            ->join('produk', 'detail_transaksi.produk_id', '=', 'produk.id')
            ->select(
                'detail_transaksi.*',
                'produk.nama_produk'
            )
            ->where('transaksi_id', $id)
            ->get();

        return view('detail_transaksi', compact('transaksi', 'detail'));
    }
}