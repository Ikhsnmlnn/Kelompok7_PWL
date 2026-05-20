<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

return new class extends Migration
{
    public function up(): void
    {
        Schema::table('cabang', function (Blueprint $table) {

            $table->string('kode_cabang')
                  ->after('nama_cabang');

        });
    }

    public function down(): void
    {
        Schema::table('cabang', function (Blueprint $table) {

            $table->dropColumn('kode_cabang');

        });
    }
};