<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class CabangSeeder extends Seeder
{
    public function run(): void
    {
        DB::table('cabang')->insert([
            [
                'nama_cabang' => 'Cabang Jakarta',
                'kode_cabang' => 'JKT',
                'alamat' => 'Jl. Sudirman'
            ],

            [
                'nama_cabang' => 'Cabang Bandung',
                'kode_cabang' => 'BDG',
                'alamat' => 'Jl. Asia Afrika'
            ],

            [
                'nama_cabang' => 'Cabang Surabaya',
                'kode_cabang' => 'SBY',
                'alamat' => 'Jl. Pemuda'
            ],

            [
                'nama_cabang' => 'Cabang Medan',
                'kode_cabang' => 'MDN',
                'alamat' => 'Jl. Gatot Subroto'
            ],

            [
                'nama_cabang' => 'Cabang Yogyakarta',
                'kode_cabang' => 'YGY',
                'alamat' => 'Jl. Malioboro'
            ]

        ]);
    }
}