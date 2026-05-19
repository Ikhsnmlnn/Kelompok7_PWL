<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class TransaksiSeeder extends Seeder
{
    public function run(): void
    {

        // =========================================
        // TRANSAKSI
        // =========================================

        DB::table('transaksi')->insert([

            [
                'kode_transaksi' => 'TRX001',
                'tanggal' => now()->subDays(5),
                'total' => 15000,
                'user_id' => 4,
                'cabang_id' => 1,
                'created_at' => now(),
                'updated_at' => now(),
            ],

            [
                'kode_transaksi' => 'TRX002',
                'tanggal' => now()->subDays(5),
                'total' => 27000,
                'user_id' => 8,
                'cabang_id' => 2,
                'created_at' => now(),
                'updated_at' => now(),
            ],

            [
                'kode_transaksi' => 'TRX003',
                'tanggal' => now()->subDays(4),
                'total' => 9500,
                'user_id' => 12,
                'cabang_id' => 3,
                'created_at' => now(),
                'updated_at' => now(),
            ],

            [
                'kode_transaksi' => 'TRX004',
                'tanggal' => now()->subDays(4),
                'total' => 44000,
                'user_id' => 16,
                'cabang_id' => 4,
                'created_at' => now(),
                'updated_at' => now(),
            ],

            [
                'kode_transaksi' => 'TRX005',
                'tanggal' => now()->subDays(3),
                'total' => 18500,
                'user_id' => 20,
                'cabang_id' => 5,
                'created_at' => now(),
                'updated_at' => now(),
            ],

            [
                'kode_transaksi' => 'TRX006',
                'tanggal' => now()->subDays(3),
                'total' => 32000,
                'user_id' => 4,
                'cabang_id' => 1,
                'created_at' => now(),
                'updated_at' => now(),
            ],

            [
                'kode_transaksi' => 'TRX007',
                'tanggal' => now()->subDays(2),
                'total' => 12500,
                'user_id' => 8,
                'cabang_id' => 2,
                'created_at' => now(),
                'updated_at' => now(),
            ],

            [
                'kode_transaksi' => 'TRX008',
                'tanggal' => now()->subDays(2),
                'total' => 51000,
                'user_id' => 12,
                'cabang_id' => 3,
                'created_at' => now(),
                'updated_at' => now(),
            ],

            [
                'kode_transaksi' => 'TRX009',
                'tanggal' => now()->subDay(),
                'total' => 23000,
                'user_id' => 16,
                'cabang_id' => 4,
                'created_at' => now(),
                'updated_at' => now(),
            ],

            [
                'kode_transaksi' => 'TRX010',
                'tanggal' => now(),
                'total' => 16000,
                'user_id' => 20,
                'cabang_id' => 5,
                'created_at' => now(),
                'updated_at' => now(),
            ],

        ]);


        // =========================================
        // DETAIL TRANSAKSI
        // =========================================

        DB::table('detail_transaksi')->insert([

            // TRX001
            [
                'transaksi_id' => 1,
                'produk_id' => 1,
                'jumlah' => 2,
                'harga' => 3500,
                'subtotal' => 7000,
                'created_at' => now(),
                'updated_at' => now(),
            ],

            [
                'transaksi_id' => 1,
                'produk_id' => 5,
                'jumlah' => 1,
                'harga' => 5000,
                'subtotal' => 5000,
                'created_at' => now(),
                'updated_at' => now(),
            ],

            // TRX002
            [
                'transaksi_id' => 2,
                'produk_id' => 3,
                'jumlah' => 1,
                'harga' => 75000,
                'subtotal' => 75000,
                'created_at' => now(),
                'updated_at' => now(),
            ],

            // TRX003
            [
                'transaksi_id' => 3,
                'produk_id' => 7,
                'jumlah' => 2,
                'harga' => 2500,
                'subtotal' => 5000,
                'created_at' => now(),
                'updated_at' => now(),
            ],

            // TRX004
            [
                'transaksi_id' => 4,
                'produk_id' => 10,
                'jumlah' => 2,
                'harga' => 18000,
                'subtotal' => 36000,
                'created_at' => now(),
                'updated_at' => now(),
            ],

            // TRX005
            [
                'transaksi_id' => 5,
                'produk_id' => 8,
                'jumlah' => 2,
                'harga' => 8000,
                'subtotal' => 16000,
                'created_at' => now(),
                'updated_at' => now(),
            ],

            // TRX006
            [
                'transaksi_id' => 6,
                'produk_id' => 12,
                'jumlah' => 1,
                'harga' => 22000,
                'subtotal' => 22000,
                'created_at' => now(),
                'updated_at' => now(),
            ],

            // TRX007
            [
                'transaksi_id' => 7,
                'produk_id' => 4,
                'jumlah' => 1,
                'harga' => 12000,
                'subtotal' => 12000,
                'created_at' => now(),
                'updated_at' => now(),
            ],

            // TRX008
            [
                'transaksi_id' => 8,
                'produk_id' => 11,
                'jumlah' => 3,
                'harga' => 11000,
                'subtotal' => 33000,
                'created_at' => now(),
                'updated_at' => now(),
            ],

            // TRX009
            [
                'transaksi_id' => 9,
                'produk_id' => 6,
                'jumlah' => 3,
                'harga' => 7000,
                'subtotal' => 21000,
                'created_at' => now(),
                'updated_at' => now(),
            ],

            // TRX010
            [
                'transaksi_id' => 10,
                'produk_id' => 9,
                'jumlah' => 3,
                'harga' => 4500,
                'subtotal' => 13500,
                'created_at' => now(),
                'updated_at' => now(),
            ],

        ]);
    }
}