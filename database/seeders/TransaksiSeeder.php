<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class TransaksiSeeder extends Seeder
{
    private function generateKodeTransaksi($kodeCabang, $nomor)
    {
        $tanggal = now()->format('Ymd');

        $urutan = str_pad($nomor, 4, '0', STR_PAD_LEFT);

        return $kodeCabang . '-' . $tanggal . '-' . $urutan;
    }

    public function run(): void
    {
        // =========================================
        // DATA CABANG
        // =========================================

        $cabangList = DB::table('cabang')->get();


        // =========================================
        // DATA PRODUK
        // =========================================

        $produkList = DB::table('produk')->get();


        // =========================================
        // USER KASIR PER CABANG
        // =========================================

        $kasirCabang = [
            1 => 2,
            2 => 6,
            3 => 10,
            4 => 14,
            5 => 18,
        ];


        // =========================================
        // VARIABEL PENAMPUNG
        // =========================================

        $dataTransaksi = [];
        $dataDetail = [];

        $transaksiId = 1;


        // =========================================
        // GENERATE TRANSAKSI
        // =========================================

        foreach ($cabangList as $cabang) {

            for ($i = 1; $i <= 15; $i++) {

                // tanggal random april - mei
                $tanggalRandom = fake()->dateTimeBetween(
                    '2026-04-01',
                    '2026-05-20'
                );


                // generate kode transaksi
                $kodeTransaksi =
                    $cabang->kode_cabang . '-' .
                    date('Ymd', strtotime($tanggalRandom->format('Y-m-d'))) . '-' .
                    str_pad($i, 4, '0', STR_PAD_LEFT);


                // jumlah produk dibeli
                $jumlahProduk = rand(2, 5);


                // ambil produk random
                $produkRandom = $produkList
                    ->random($jumlahProduk);


                // total transaksi
                $totalTransaksi = 0;


                // simpan detail transaksi
                foreach ($produkRandom as $produk) {

                    $jumlahBeli = rand(1, 4);

                    $subtotal =
                        $produk->harga * $jumlahBeli;

                    $totalTransaksi += $subtotal;


                    $dataDetail[] = [
                        'transaksi_id' => $transaksiId,
                        'produk_id' => $produk->id,
                        'jumlah' => $jumlahBeli,
                        'harga' => $produk->harga,
                        'subtotal' => $subtotal,
                        'created_at' => $tanggalRandom,
                        'updated_at' => $tanggalRandom,
                    ];
                }


                // simpan transaksi
                $dataTransaksi[] = [
                    'kode_transaksi' => $kodeTransaksi,
                    'tanggal' => $tanggalRandom,
                    'total' => $totalTransaksi,
                    'user_id' => $kasirCabang[$cabang->id],
                    'cabang_id' => $cabang->id,
                    'created_at' => $tanggalRandom,
                    'updated_at' => $tanggalRandom,
                ];


                $transaksiId++;
            }
        }


        // =========================================
        // INSERT KE DATABASE
        // =========================================

        DB::table('transaksi')->insert($dataTransaksi);

        DB::table('detail_transaksi')->insert($dataDetail);
    }
}