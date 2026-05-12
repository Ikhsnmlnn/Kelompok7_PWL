<?php

namespace App\Http\Controllers;

use Illuminate\Support\Facades\DB;
use Illuminate\Http\Request;

class TransaksiController extends Controller
{
    public function index(Request $request)
    {
        $query = DB::table('transaksi')
            ->join('users', 'transaksi.user_id', '=', 'users.id')
            ->join('cabang', 'transaksi.cabang_id', '=', 'cabang.id')
            ->select(
                'transaksi.*',
                'users.name as nama_user',
                'cabang.nama_cabang'
            );

        // filter cabang
        if ($request->cabang_id) {
            $query->where('transaksi.cabang_id', $request->cabang_id);
        }

        // filter tanggal awal
        if ($request->tanggal_awal) {
            $query->whereDate('transaksi.tanggal', '>=', $request->tanggal_awal);
        }

        // filter tanggal akhir
        if ($request->tanggal_akhir) {
            $query->whereDate('transaksi.tanggal', '<=', $request->tanggal_akhir);
        }

        $transaksi = $query->paginate(10);

        // ambil data cabang untuk dropdown
        $cabang = DB::table('cabang')->get();

        return view('transaksi', compact('transaksi', 'cabang'));
    }

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