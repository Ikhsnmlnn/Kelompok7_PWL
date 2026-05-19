<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class ProdukSeeder extends Seeder
{
    public function run(): void
    {
        DB::table('produk')->insert([

            // MAKANAN
            [
                'nama_produk' => 'Indomie Goreng',
                'harga' => 3500,
                'kategori_id' => 1,
                'created_at' => now(),
                'updated_at' => now(),
            ],

            [
                'nama_produk' => 'Roti Tawar',
                'harga' => 15000,
                'kategori_id' => 1,
                'created_at' => now(),
                'updated_at' => now(),
            ],

            [
                'nama_produk' => 'Beras 5Kg',
                'harga' => 75000,
                'kategori_id' => 1,
                'created_at' => now(),
                'updated_at' => now(),
            ],

            [
                'nama_produk' => 'Biskuit Roma',
                'harga' => 12000,
                'kategori_id' => 1,
                'created_at' => now(),
                'updated_at' => now(),
            ],

            // MINUMAN
            [
                'nama_produk' => 'Aqua 600ml',
                'harga' => 5000,
                'kategori_id' => 2,
                'created_at' => now(),
                'updated_at' => now(),
            ],

            [
                'nama_produk' => 'Teh Botol',
                'harga' => 7000,
                'kategori_id' => 2,
                'created_at' => now(),
                'updated_at' => now(),
            ],

            [
                'nama_produk' => 'Kopi Kapal Api',
                'harga' => 2500,
                'kategori_id' => 2,
                'created_at' => now(),
                'updated_at' => now(),
            ],

            [
                'nama_produk' => 'Susu Ultra Milk',
                'harga' => 8000,
                'kategori_id' => 2,
                'created_at' => now(),
                'updated_at' => now(),
            ],

            // KEBUTUHAN HARIAN
            [
                'nama_produk' => 'Sabun Lifebuoy',
                'harga' => 4500,
                'kategori_id' => 3,
                'created_at' => now(),
                'updated_at' => now(),
            ],

            [
                'nama_produk' => 'Shampoo Sunsilk',
                'harga' => 18000,
                'kategori_id' => 3,
                'created_at' => now(),
                'updated_at' => now(),
            ],

            [
                'nama_produk' => 'Pasta Gigi Pepsodent',
                'harga' => 11000,
                'kategori_id' => 3,
                'created_at' => now(),
                'updated_at' => now(),
            ],

            [
                'nama_produk' => 'Minyak Goreng 1L',
                'harga' => 22000,
                'kategori_id' => 3,
                'created_at' => now(),
                'updated_at' => now(),
            ],

        ]);
    }
}