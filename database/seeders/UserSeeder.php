<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Hash;

class UserSeeder extends Seeder
{
    public function run(): void
    {
        DB::table('users')->insert([

            // ADMIN PUSAT
            [
                'name' => 'Pak Jayusman',
                'email' => 'admin@gmail.com',
                'password' => Hash::make('123456'),
                'role' => 'admin',
                'cabang_id' => null,
                'created_at' => now(),
                'updated_at' => now(),
            ],

            // =========================
            // JAKARTA
            // =========================

            [
                'name' => 'Manager Jakarta',
                'email' => 'manager.jakarta@gmail.com',
                'password' => Hash::make('123456'),
                'role' => 'manager',
                'cabang_id' => 1,
                'created_at' => now(),
                'updated_at' => now(),
            ],

            [
                'name' => 'Supervisor Jakarta',
                'email' => 'supervisor.jakarta@gmail.com',
                'password' => Hash::make('123456'),
                'role' => 'supervisor',
                'cabang_id' => 1,
                'created_at' => now(),
                'updated_at' => now(),
            ],

            [
                'name' => 'Kasir Jakarta',
                'email' => 'kasir.jakarta@gmail.com',
                'password' => Hash::make('123456'),
                'role' => 'kasir',
                'cabang_id' => 1,
                'created_at' => now(),
                'updated_at' => now(),
            ],

            [
                'name' => 'Gudang Jakarta',
                'email' => 'gudang.jakarta@gmail.com',
                'password' => Hash::make('123456'),
                'role' => 'gudang',
                'cabang_id' => 1,
                'created_at' => now(),
                'updated_at' => now(),
            ],

            // =========================
            // BANDUNG
            // =========================

            [
                'name' => 'Manager Bandung',
                'email' => 'manager.bandung@gmail.com',
                'password' => Hash::make('123456'),
                'role' => 'manager',
                'cabang_id' => 2,
                'created_at' => now(),
                'updated_at' => now(),
            ],

            [
                'name' => 'Supervisor Bandung',
                'email' => 'supervisor.bandung@gmail.com',
                'password' => Hash::make('123456'),
                'role' => 'supervisor',
                'cabang_id' => 2,
                'created_at' => now(),
                'updated_at' => now(),
            ],

            [
                'name' => 'Kasir Bandung',
                'email' => 'kasir.bandung@gmail.com',
                'password' => Hash::make('123456'),
                'role' => 'kasir',
                'cabang_id' => 2,
                'created_at' => now(),
                'updated_at' => now(),
            ],

            [
                'name' => 'Gudang Bandung',
                'email' => 'gudang.bandung@gmail.com',
                'password' => Hash::make('123456'),
                'role' => 'gudang',
                'cabang_id' => 2,
                'created_at' => now(),
                'updated_at' => now(),
            ],

            // =========================
            // SURABAYA
            // =========================

            [
                'name' => 'Manager Surabaya',
                'email' => 'manager.surabaya@gmail.com',
                'password' => Hash::make('123456'),
                'role' => 'manager',
                'cabang_id' => 3,
                'created_at' => now(),
                'updated_at' => now(),
            ],

            [
                'name' => 'Supervisor Surabaya',
                'email' => 'supervisor.surabaya@gmail.com',
                'password' => Hash::make('123456'),
                'role' => 'supervisor',
                'cabang_id' => 3,
                'created_at' => now(),
                'updated_at' => now(),
            ],

            [
                'name' => 'Kasir Surabaya',
                'email' => 'kasir.surabaya@gmail.com',
                'password' => Hash::make('123456'),
                'role' => 'kasir',
                'cabang_id' => 3,
                'created_at' => now(),
                'updated_at' => now(),
            ],

            [
                'name' => 'Gudang Surabaya',
                'email' => 'gudang.surabaya@gmail.com',
                'password' => Hash::make('123456'),
                'role' => 'gudang',
                'cabang_id' => 3,
                'created_at' => now(),
                'updated_at' => now(),
            ],

            // =========================
            // YOGYAKARTA
            // =========================

            [
                'name' => 'Manager Yogyakarta',
                'email' => 'manager.yogyakarta@gmail.com',
                'password' => Hash::make('123456'),
                'role' => 'manager',
                'cabang_id' => 4,
                'created_at' => now(),
                'updated_at' => now(),
            ],

            [
                'name' => 'Supervisor Yogyakarta',
                'email' => 'supervisor.yogyakarta@gmail.com',
                'password' => Hash::make('123456'),
                'role' => 'supervisor',
                'cabang_id' => 4,
                'created_at' => now(),
                'updated_at' => now(),
            ],

            [
                'name' => 'Kasir Yogyakarta',
                'email' => 'kasir.yogyakarta@gmail.com',
                'password' => Hash::make('123456'),
                'role' => 'kasir',
                'cabang_id' => 4,
                'created_at' => now(),
                'updated_at' => now(),
            ],

            [
                'name' => 'Gudang Yogyakarta',
                'email' => 'gudang.yogyakarta@gmail.com',
                'password' => Hash::make('123456'),
                'role' => 'gudang',
                'cabang_id' => 4,
                'created_at' => now(),
                'updated_at' => now(),
            ],

            // =========================
            // MEDAN
            // =========================

            [
                'name' => 'Manager Medan',
                'email' => 'manager.medan@gmail.com',
                'password' => Hash::make('123456'),
                'role' => 'manager',
                'cabang_id' => 5,
                'created_at' => now(),
                'updated_at' => now(),
            ],

            [
                'name' => 'Supervisor Medan',
                'email' => 'supervisor.medan@gmail.com',
                'password' => Hash::make('123456'),
                'role' => 'supervisor',
                'cabang_id' => 5,
                'created_at' => now(),
                'updated_at' => now(),
            ],

            [
                'name' => 'Kasir Medan',
                'email' => 'kasir.medan@gmail.com',
                'password' => Hash::make('123456'),
                'role' => 'kasir',
                'cabang_id' => 5,
                'created_at' => now(),
                'updated_at' => now(),
            ],

            [
                'name' => 'Gudang Medan',
                'email' => 'gudang.medan@gmail.com',
                'password' => Hash::make('123456'),
                'role' => 'gudang',
                'cabang_id' => 5,
                'created_at' => now(),
                'updated_at' => now(),
            ],

        ]);
    }
}