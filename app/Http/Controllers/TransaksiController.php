<?php

namespace App\Http\Controllers;

use Illuminate\Support\Facades\DB;
use Illuminate\Http\Request;

class TransaksiController extends Controller
{
    // =========================================
    // HALAMAN RINGKASAN TRANSAKSI PER CABANG
    // =========================================

    public function index(Request $request)
    {

    // =========================================
    // SESSION FILTER
    // =========================================

    if ($request->hasAny([
        'filter',
        'tanggal_awal',
        'tanggal_akhir'
    ])) {

        session([

            'transaksi_filter' => [

                'filter' => $request->filter,

                'tanggal_awal' => $request->tanggal_awal,

                'tanggal_akhir' => $request->tanggal_akhir,
            ]
        ]);

    } else {

        $filter = session('transaksi_filter');

        if ($filter) {

            return redirect()->to(
                '/transaksi?' . http_build_query($filter)
            );
        }
    }

        $query = DB::table('transaksi')
            ->join('cabang', 'transaksi.cabang_id', '=', 'cabang.id');


        // =========================================
        // FILTER CEPAT
        // =========================================

        if ($request->filter == 'hari_ini') {

            $query->whereDate('tanggal', today());

        } elseif ($request->filter == '7_hari') {

            $query->whereBetween('tanggal', [
                now()->subDays(7),
                now()
            ]);

        } elseif ($request->filter == 'bulan_ini') {

            $query->whereMonth('tanggal', now()->month)
                  ->whereYear('tanggal', now()->year);

        } elseif ($request->filter == 'tahun_ini') {

            $query->whereYear('tanggal', now()->year);
        }


        // =========================================
        // FILTER CUSTOM TANGGAL
        // =========================================

        if ($request->tanggal_awal && $request->tanggal_akhir) {

            $query->whereBetween('tanggal', [
                $request->tanggal_awal,
                $request->tanggal_akhir
            ]);
        }


        // =========================================
        // RINGKASAN CABANG
        // =========================================

        $transaksi = $query
            ->select(
                'cabang.id',
                'cabang.nama_cabang',

                DB::raw('COUNT(transaksi.id) as jumlah_transaksi'),

                DB::raw('SUM(transaksi.total) as total_pendapatan'),

                DB::raw('MAX(transaksi.tanggal) as transaksi_terakhir')
            )
            ->groupBy(
                'cabang.id',
                'cabang.nama_cabang'
            )
            ->get();


        return view('admin.transaksi', compact(
            'transaksi'
        ));
    }



    // =========================================
    // HALAMAN TRANSAKSI BERDASARKAN CABANG
    // =========================================

    public function cabang(Request $request, $id)
    {
        $query = DB::table('transaksi')
            ->join('users', 'transaksi.user_id', '=', 'users.id')
            ->join('cabang', 'transaksi.cabang_id', '=', 'cabang.id')
            ->select(
                'transaksi.*',

                'users.name as nama_user',

                'cabang.nama_cabang'
            )
            ->where('transaksi.cabang_id', $id);


        // =========================================
        // FILTER CEPAT
        // =========================================

        if ($request->filter == 'hari_ini') {

            $query->whereDate('tanggal', today());

        } elseif ($request->filter == '7_hari') {

            $query->whereBetween('tanggal', [
                now()->subDays(7),
                now()
            ]);

        } elseif ($request->filter == 'bulan_ini') {

            $query->whereMonth('tanggal', now()->month)
                  ->whereYear('tanggal', now()->year);

        } elseif ($request->filter == 'tahun_ini') {

            $query->whereYear('tanggal', now()->year);
        }


        // =========================================
        // FILTER CUSTOM
        // =========================================

        if ($request->tanggal_awal && $request->tanggal_akhir) {

            $query->whereBetween('tanggal', [
                $request->tanggal_awal,
                $request->tanggal_akhir
            ]);
        }


        $transaksi = $query
            ->orderBy('tanggal', 'desc')
            ->paginate(10)
            ->withQueryString();


        $cabang = DB::table('cabang')
            ->where('id', $id)
            ->first();


        return view('admin.transaksi_cabang', compact(
            'transaksi',
            'cabang'
        ));
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


        return view('admin.detail_transaksi', compact(
            'transaksi',
            'detail'
        ));
    }
}