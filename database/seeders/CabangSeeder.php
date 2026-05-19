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
                'alamat' => 'Jl. Sudirman No. 12'
            ],

            [
                'nama_cabang' => 'Cabang Bandung',
                'alamat' => 'Jl. Asia Afrika No. 8'
            ],

            [
                'nama_cabang' => 'Cabang Surabaya',
                'alamat' => 'Jl. Pemuda No. 21'
            ],

            [
                'nama_cabang' => 'Cabang Yogyakarta',
                'alamat' => 'Jl. Malioboro No. 5'
            ],

            [
                'nama_cabang' => 'Cabang Medan',
                'alamat' => 'Jl. Gatot Subroto No. 17'
            ]

        ]);
    }
}