<?php

namespace App\Http\Controllers;

use Illuminate\Support\Facades\DB;
use Illuminate\Http\Request;

class ProdukController extends Controller
{
    public function index(Request $request)
    {
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
            $query->where('stok_cabang.cabang_id', $request->cabang_id);
        }


        // =========================================
        // FILTER KATEGORI
        // =========================================

        if ($request->kategori_id) {
            $query->where('produk.kategori_id', $request->kategori_id);
        }


        // =========================================
        // SEARCH PRODUK
        // =========================================

        if ($request->search) {
            $query->where('produk.nama_produk', 'like', '%' . $request->search . '%');
        }


        $produk = $query
            ->orderBy('produk.nama_produk', 'asc')
            ->paginate(7)
            ->withQueryString();


        $cabang = DB::table('cabang')->get();

        $kategori = DB::table('kategori')->get();

        return view('produk', compact(
            'produk',
            'cabang',
            'kategori'
        ));
    }

    public function create()
    {
        $kategori = DB::table('kategori')->get();
        $cabang = DB::table('cabang')->get();

        return view('tambah_produk', compact('kategori', 'cabang'));
    }

    public function store(Request $request)
    {
        // simpan produk
        $produkId = DB::table('produk')->insertGetId([
            'nama_produk' => $request->nama_produk,
            'harga' => $request->harga,
            'kategori_id' => $request->kategori_id,
            'created_at' => now(),
            'updated_at' => now(),
        ]);

        // simpan stok cabang
        DB::table('stok_cabang')->insert([
            'produk_id' => $produkId,
            'cabang_id' => $request->cabang_id,
            'created_at' => now(),
            'updated_at' => now(),
        ]);

        return redirect('/produk');
    }

    public function edit($id)
    {
        $produk = DB::table('produk')->find($id);
        $kategori = DB::table('kategori')->get();

        return view('edit_produk', compact('produk', 'kategori'));
    }

    public function update(Request $request, $id)
    {
        DB::table('produk')
            ->where('id', $id)
            ->update([
                'nama_produk' => $request->nama_produk,
                'harga' => $request->harga,
                'stok' => $request->stok,
                'kategori_id' => $request->kategori_id,
                'updated_at' => now(),
            ]);

        return redirect('/produk');
    }

    public function destroy($id)
    {
        DB::table('produk')
            ->where('id', $id)
            ->delete();

        return redirect('/produk');
    }
}