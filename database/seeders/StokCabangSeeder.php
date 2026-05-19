<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class StokCabangSeeder extends Seeder
{
    public function run(): void
    {
        DB::table('stok_cabang')->insert([

            // =====================================
            // CABANG JAKARTA
            // =====================================

            [
                'produk_id' => 1, 
                'cabang_id' => 1, 
                'stok' => 120, 
                'created_at' => now(), 
                'updated_at' => now()
            ],
            [
                'produk_id' => 2, 
                'cabang_id' => 1, 
                'stok' => 80, 
                'created_at' => now(), 
                'updated_at' => now()
            ],
            [
                'produk_id' => 3, 
                'cabang_id' => 1, 
                'stok' => 60, 
                'created_at' => now(), 
                'updated_at' => now()
            ],
            [
                'produk_id' => 4, 
                'cabang_id' => 1, 
                'stok' => 75, 
                'created_at' => now(), 
                'updated_at' => now()
            ],
            [
                'produk_id' => 5, 
                'cabang_id' => 1, 
                'stok' => 150, 
                'created_at' => now(), 
                'updated_at' => now()
            ],
            [
                'produk_id' => 6, 
                'cabang_id' => 1, 
                'stok' => 90, 
                'created_at' => now(), 
                'updated_at' => now()
            ],
            [
                'produk_id' => 7, 
                'cabang_id' => 1, 
                'stok' => 100, 
                'created_at' => now(), 
                'updated_at' => now()
            ],
            [
                'produk_id' => 8, 
                'cabang_id' => 1, 
                'stok' => 65, 
                'created_at' => now(), 
                'updated_at' => now()
            ],
            [
                'produk_id' => 9, 
                'cabang_id' => 1, 
                'stok' => 70, 
                'created_at' => now(), 
                'updated_at' => now()
            ],
            [
                'produk_id' => 10, 
                'cabang_id' => 1, 
                'stok' => 55, 
                'created_at' => now(), 
                'updated_at' => now()
            ],
            [
                'produk_id' => 11, 
                'cabang_id' => 1, 
                'stok' => 85, 
                'created_at' => now(), 
                'updated_at' => now()
            ],
            [
                'produk_id' => 12, 
                'cabang_id' => 1, 
                'stok' => 95, 
                'created_at' => now(), 
                'updated_at' => now()
            ],


            // =====================================
            // CABANG BANDUNG
            // =====================================

            [
                'produk_id' => 1, 
                'cabang_id' => 2, 
                'stok' => 90, 
                'created_at' => now(), 
                'updated_at' => now()
            ],
            [
                'produk_id' => 2, 
                'cabang_id' => 2, 
                'stok' => 60, 
                'created_at' => now(), 
                'updated_at' => now()
            ],
            [
                'produk_id' => 3, 
                'cabang_id' => 2, 
                'stok' => 40, 
                'created_at' => now(), 
                'updated_at' => now()
            ],
            [
                'produk_id' => 4, 
                'cabang_id' => 2, 
                'stok' => 50, 
                'created_at' => now(), 
                'updated_at' => now()
            ],
            [
                'produk_id' => 5, 
                'cabang_id' => 2, 
                'stok' => 110, 
                'created_at' => now(), 
                'updated_at' => now()
            ],
            [
                'produk_id' => 6, 
                'cabang_id' => 2, 
                'stok' => 70, 
                'created_at' => now(), 
                'updated_at' => now()
            ],
            [
                'produk_id' => 7, 
                'cabang_id' => 2, 
                'stok' => 80, 
                'created_at' => now(), 
                'updated_at' => now()
            ],
            [
                'produk_id' => 8, 
                'cabang_id' => 2, 
                'stok' => 45, 
                'created_at' => now(), 
                'updated_at' => now()
            ],
            [
                'produk_id' => 9, 
                'cabang_id' => 2, 
                'stok' => 55, 
                'created_at' => now(), 
                'updated_at' => now()
            ],
            [
                'produk_id' => 10, 
                'cabang_id' => 2, 
                'stok' => 35, 
                'created_at' => now(), 
                'updated_at' => now()
            ],
            [
                'produk_id' => 11, 
                'cabang_id' => 2, 
                'stok' => 60, 
                'created_at' => now(), 
                'updated_at' => now()
            ],
            [
                'produk_id' => 12, 
                'cabang_id' => 2, 
                'stok' => 75, 
                'created_at' => now(), 
                'updated_at' => now()
            ],


            // =====================================
            // CABANG SURABAYA
            // =====================================

            [
                'produk_id' => 1, 
                'cabang_id' => 3, 
                'stok' => 100, 
                'created_at' => now(), 
                'updated_at' => now()
            ],
            [
                'produk_id' => 2, 
                'cabang_id' => 3, 
                'stok' => 75, 
                'created_at' => now(), 
                'updated_at' => now()
            ],
            [
                'produk_id' => 3, 
                'cabang_id' => 3, 
                'stok' => 55, 
                'created_at' => now(), 
                'updated_at' => now()
            ],
            [
                'produk_id' => 4, 
                'cabang_id' => 3, 
                'stok' => 65, 
                'created_at' => now(), 
                'updated_at' => now()
            ],
            [
                'produk_id' => 5, 
                'cabang_id' => 3, 
                'stok' => 130, 
                'created_at' => now(), 
                'updated_at' => now()
            ],
            [
                'produk_id' => 6, 
                'cabang_id' => 3, 
                'stok' => 85, 
                'created_at' => now(), 
                'updated_at' => now()
            ],
            [
                'produk_id' => 7, 
                'cabang_id' => 3, 
                'stok' => 90, 
                'created_at' => now(), 
                'updated_at' => now()
            ],
            [
                'produk_id' => 8, 
                'cabang_id' => 3, 
                'stok' => 50, 
                'created_at' => now(), 
                'updated_at' => now()
            ],
            [
                'produk_id' => 9, 
                'cabang_id' => 3, 
                'stok' => 60, 
                'created_at' => now(), 
                'updated_at' => now()
            ],
            [
                'produk_id' => 10, 
                'cabang_id' => 3, 
                'stok' => 45, 
                'created_at' => now(), 
                'updated_at' => now()
            ],
            [
                'produk_id' => 11, 
                'cabang_id' => 3, 
                'stok' => 70, 
                'created_at' => now(), 
                'updated_at' => now()
            ],
            [
                'produk_id' => 12, 
                'cabang_id' => 3, 
                'stok' => 80, 
                'created_at' => now(), 
                'updated_at' => now()
            ],


            // =====================================
            // CABANG YOGYAKARTA
            // =====================================

            [
                'produk_id' => 1, 
                'cabang_id' => 4, 
                'stok' => 70, 
                'created_at' => now(), 
                'updated_at' => now()
            ],
            [
                'produk_id' => 2, 
                'cabang_id' => 4, 
                'stok' => 50, 
                'created_at' => now(), 
                'updated_at' => now()
            ],
            [
                'produk_id' => 3, 
                'cabang_id' => 4, 
                'stok' => 35, 
                'created_at' => now(), 
                'updated_at' => now()
            ],
            [
                'produk_id' => 4, 
                'cabang_id' => 4, 
                'stok' => 40, 
                'created_at' => now(), 
                'updated_at' => now()
            ],
            [
                'produk_id' => 5, 
                'cabang_id' => 4, 
                'stok' => 90, 
                'created_at' => now(), 
                'updated_at' => now()
            ],
            [
                'produk_id' => 6, 
                'cabang_id' => 4, 
                'stok' => 60, 
                'created_at' => now(), 
                'updated_at' => now()
            ],
            [
                'produk_id' => 7, 
                'cabang_id' => 4, 
                'stok' => 65, 
                'created_at' => now(), 
                'updated_at' => now()
            ],
            [
                'produk_id' => 8, 
                'cabang_id' => 4, 
                'stok' => 30, 
                'created_at' => now(), 
                'updated_at' => now()
            ],
            [
                'produk_id' => 9, 
                'cabang_id' => 4, 
                'stok' => 45, 
                'created_at' => now(), 
                'updated_at' => now()
            ],
            [
                'produk_id' => 10, 
                'cabang_id' => 4, 
                'stok' => 25, 
                'created_at' => now(), 
                'updated_at' => now()
            ],
            [
                'produk_id' => 11, 
                'cabang_id' => 4, 
                'stok' => 50, 
                'created_at' => now(), 
                'updated_at' => now()
            ],
            [
                'produk_id' => 12, 
                'cabang_id' => 4, 
                'stok' => 55, 
                'created_at' => now(), 
                'updated_at' => now()
            ],


            // =====================================
            // CABANG MEDAN
            // =====================================

            [
                'produk_id' => 1, 
                'cabang_id' => 5, 
                'stok' => 85, 
                'created_at' => now(), 
                'updated_at' => now()
            ],
            [
                'produk_id' => 2, 
                'cabang_id' => 5, 
                'stok' => 65, 
                'created_at' => now(), 
                'updated_at' => now()
            ],
            [
                'produk_id' => 3, 
                'cabang_id' => 5, 
                'stok' => 45, 
                'created_at' => now(), 
                'updated_at' => now()
            ],
            [
                'produk_id' => 4, 
                'cabang_id' => 5, 
                'stok' => 55, 
                'created_at' => now(), 
                'updated_at' => now()
            ],
            [
                'produk_id' => 5, 
                'cabang_id' => 5, 
                'stok' => 115, 
                'created_at' => now(), 
                'updated_at' => now()
            ],
            [
                'produk_id' => 6, 
                'cabang_id' => 5, 
                'stok' => 75, 
                'created_at' => now(), 
                'updated_at' => now()
            ],
            [
                'produk_id' => 7, 
                'cabang_id' => 5, 
                'stok' => 85, 
                'created_at' => now(), 
                'updated_at' => now()
            ],
            [
                'produk_id' => 8, 
                'cabang_id' => 5, 
                'stok' => 40, 
                'created_at' => now(), 
                'updated_at' => now()
            ],
            [
                'produk_id' => 9, 
                'cabang_id' => 5, 
                'stok' => 55, 
                'created_at' => now(), 
                'updated_at' => now()
            ],
            [
                'produk_id' => 10, 
                'cabang_id' => 5, 
                'stok' => 35, 
                'created_at' => now(), 
                'updated_at' => now()
            ],
            [
                'produk_id' => 11, 
                'cabang_id' => 5, 
                'stok' => 65, 
                'created_at' => now(), 
                'updated_at' => now()
            ],
            [
                'produk_id' => 12, 
                'cabang_id' => 5, 
                'stok' => 70, 
                'created_at' => now(), 
                'updated_at' => now()
            ],

        ]);
    }
}