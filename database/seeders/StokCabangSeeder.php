<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class StokCabangSeeder extends Seeder
{
    public function run(): void
    {
        DB::table('stok_cabang')->insert([

            // Aqua
            [
                'produk_id' => 1,
                'cabang_id' => 1,
                'stok' => 10,
                'created_at' => now(),
                'updated_at' => now(),
            ],

            [
                'produk_id' => 1,
                'cabang_id' => 2,
                'stok' => 5,
                'created_at' => now(),
                'updated_at' => now(),
            ],

            // Indomie
            [
                'produk_id' => 2,
                'cabang_id' => 1,
                'stok' => 20,
                'created_at' => now(),
                'updated_at' => now(),
            ],

            [
                'produk_id' => 2,
                'cabang_id' => 2,
                'stok' => 15,
                'created_at' => now(),
                'updated_at' => now(),
            ],
        ]);
    }
}