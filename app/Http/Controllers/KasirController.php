<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\RiwayatTransaksi;
use App\Models\Produk;

class KasirController extends Controller
{
    public function dashboard()
    {
        return view('kasir.dashboard');
    }

    public function transaksi(Request $request)
    {
        $produk = Produk::query();

        if ($request->search) {
            $produk->where('nama_produk', 'like', '%' . $request->search . '%');
        }

        $produk = $produk->paginate(10);

        return view('kasir.transaksi', compact('produk'));
    }

    public function transaksiBaru()
    {
        $produk = Produk::all();
        return view('kasir.transaksi_baru', compact('produk'));
    }

    // 🔥 MULTI PRODUK
    public function pembayaran(Request $request)
    {
        $items = [];
        $grandTotal = 0;

        foreach ($request->jumlah as $produk_id => $qty) {

            if ($qty > 0) {
                $produk = Produk::find($produk_id);

                $subtotal = $produk->harga * $qty;
                $grandTotal += $subtotal;

                $items[] = [
                    'produk' => $produk,
                    'jumlah' => $qty,
                    'subtotal' => $subtotal
                ];
            }
        }

        return view('kasir.pembayaran', compact('items', 'grandTotal'));
    }

    // 🔥 SIMPAN MULTI DATA
    public function store(Request $request)
    {
        foreach ($request->produk as $index => $produk) {
            RiwayatTransaksi::create([
                'produk' => $produk,
                'jumlah' => $request->jumlah[$index],
            ]);
        }

        return redirect('/kasir/transaksi')
            ->with('success', 'Transaksi berhasil disimpan');
    }

    public function riwayat()
    {
        $riwayat = RiwayatTransaksi::latest()->get();
        return view('kasir.riwayat', compact('riwayat'));
    }

    
}