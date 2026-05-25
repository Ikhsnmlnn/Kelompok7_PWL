<?php

namespace App\Http\Controllers;

use Illuminate\Support\Facades\DB;
use Illuminate\Http\Request;

class ProdukController extends Controller
{
    // =========================================
    // LIST PRODUK
    // =========================================

    public function index(Request $request)
    {

    // =========================================
    // SESSION FILTER
    // =========================================

    if ($request->hasAny([
        'search',
        'cabang_id',
        'kategori_id'
    ])) {

        session([

            'produk_filter' => [

                'search' => $request->search,

                'cabang_id' => $request->cabang_id,

                'kategori_id' => $request->kategori_id,
            ]
        ]);

    } else {

        $filter = session('produk_filter');

        if ($filter) {

            return redirect()->to('/produk?' . http_build_query($filter));
        }
    }

        $query = DB::table('stok_cabang')
            ->join('produk', 'stok_cabang.produk_id', '=', 'produk.id')
            ->join('cabang', 'stok_cabang.cabang_id', '=', 'cabang.id')
            ->join('kategori', 'produk.kategori_id', '=', 'kategori.id')
            ->select(
                'stok_cabang.*',
                'produk.id as produk_id',
                'produk.nama_produk',
                'produk.harga',
                'kategori.nama_kategori',
                'kategori.id as kategori_id',
                'cabang.nama_cabang'
            );


        // =========================================
        // FILTER CABANG
        // =========================================

        if ($request->cabang_id) {

            $query->where(
                'stok_cabang.cabang_id',
                $request->cabang_id
            );
        }


        // =========================================
        // FILTER KATEGORI
        // =========================================

        if ($request->kategori_id) {

            $query->where(
                'produk.kategori_id',
                $request->kategori_id
            );
        }


        // =========================================
        // SEARCH PRODUK
        // =========================================

        if ($request->search) {

            $query->where(
                'produk.nama_produk',
                'like',
                '%' . $request->search . '%'
            );
        }


        $produk = $query
            ->orderBy('produk.nama_produk', 'asc')
            ->paginate(10)
            ->withQueryString();


        $cabang = DB::table('cabang')->get();

        $kategori = DB::table('kategori')->get();


        return view('admin.produk', compact(
            'produk',
            'cabang',
            'kategori'
        ));
    }



    // =========================================
    // FORM TAMBAH PRODUK
    // =========================================

    public function create()
    {
        $kategori = DB::table('kategori')->get();

        $cabang = DB::table('cabang')->get();

        return view('admin.tambah_produk', compact(
            'kategori',
            'cabang'
        ));
    }



    // =========================================
    // SIMPAN PRODUK
    // =========================================

    public function store(Request $request)
    {
        // =========================================
        // SIMPAN PRODUK
        // =========================================

        $produkId = DB::table('produk')->insertGetId([

            'nama_produk' => $request->nama_produk,

            'harga' => $request->harga,

            'kategori_id' => $request->kategori_id,

            'created_at' => now(),

            'updated_at' => now(),
        ]);


        // =========================================
        // SIMPAN STOK CABANG
        // =========================================

        foreach ($request->stok as $cabangId => $stok) {

            DB::table('stok_cabang')->insert([

                'produk_id' => $produkId,

                'cabang_id' => $cabangId,

                'stok' => $stok,

                'created_at' => now(),

                'updated_at' => now(),
            ]);
        }


        return redirect('/produk');
    }



    // =========================================
    // FORM EDIT PRODUK
    // =========================================

    public function edit($id)
    {
        $data = DB::table('stok_cabang')
            ->join('produk', 'stok_cabang.produk_id', '=', 'produk.id')
            ->join('cabang', 'stok_cabang.cabang_id', '=', 'cabang.id')
            ->select(
                'stok_cabang.id as stok_id',
                'stok_cabang.stok',
                'produk.id as produk_id',
                'produk.nama_produk',
                'produk.harga',
                'produk.kategori_id',
                'cabang.nama_cabang'
            )
            ->where('stok_cabang.id', $id)
            ->first();

        $kategori = DB::table('kategori')->get();

        return view('admin.edit_produk', compact(
            'data',
            'kategori'
        ));
    }



    // =========================================
    // UPDATE PRODUK
    // =========================================

    public function update(Request $request, $id)
    {
        // =========================================
        // AMBIL DATA STOK CABANG
        // =========================================

        $stokCabang = DB::table('stok_cabang')
            ->where('id', $id)
            ->first();


        // =========================================
        // UPDATE PRODUK
        // =========================================

        DB::table('produk')
            ->where('id', $stokCabang->produk_id)
            ->update([

                'nama_produk' => $request->nama_produk,

                'harga' => $request->harga,

                'kategori_id' => $request->kategori_id,

                'updated_at' => now(),
            ]);


        // =========================================
        // UPDATE STOK CABANG
        // =========================================

        DB::table('stok_cabang')
            ->where('id', $id)
            ->update([

                'stok' => $request->stok,

                'updated_at' => now(),
            ]);


        return redirect('/produk');
    }



    // =========================================
    // HAPUS PRODUK
    // =========================================

    public function destroy($id)
    {
        // =========================================
        // HAPUS STOK CABANG
        // =========================================

        DB::table('stok_cabang')
            ->where('produk_id', $id)
            ->delete();


        // =========================================
        // HAPUS PRODUK
        // =========================================

        DB::table('produk')
            ->where('id', $id)
            ->delete();


        return redirect('/produk');
    }
}