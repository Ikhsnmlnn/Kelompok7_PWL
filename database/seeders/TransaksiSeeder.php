<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class TransaksiSeeder extends Seeder
{
    public function run(): void
    {
        // insert transaksi
        DB::table('transaksi')->insert([
            [
                'kode_transaksi' => 'TRX001',
                'tanggal' => now(),
                'total' => 8000,
                'user_id' => 1,
                'cabang_id' => 1,
                'created_at' => now(),
                'updated_at' => now(),
            ],
            [
                'kode_transaksi' => 'TRX002',
                'tanggal' => now(),
                'total' => 12000,
                'user_id' => 2,
                'cabang_id' => 1,
                'created_at' => now(),
                'updated_at' => now(),
            ]
        ]);

        // insert detail transaksi
        DB::table('detail_transaksi')->insert([
            [
                'transaksi_id' => 1,
                'produk_id' => 1,
                'jumlah' => 1,
                'harga' => 3000,
                'subtotal' => 3000,
                'created_at' => now(),
                'updated_at' => now(),
            ],
            [
                'transaksi_id' => 1,
                'produk_id' => 2,
                'jumlah' => 1,
                'harga' => 5000,
                'subtotal' => 5000,
                'created_at' => now(),
                'updated_at' => now(),
            ],

            // detail transaksi kedua
            [
                'transaksi_id' => 2,
                'produk_id' => 1,
                'jumlah' => 2,
                'harga' => 3000,
                'subtotal' => 6000,
                'created_at' => now(),
                'updated_at' => now(),
            ],
            [
                'transaksi_id' => 2,
                'produk_id' => 2,
                'jumlah' => 1,
                'harga' => 6000,
                'subtotal' => 6000,
                'created_at' => now(),
                'updated_at' => now(),
            ]
        ]);
    }
}