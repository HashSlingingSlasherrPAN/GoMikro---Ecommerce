<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

return new class extends Migration
{
    /**
     * Run the migrations.
     */
    public function up(): void
    {
        Schema::table('validasi_penjual', function (Blueprint $table) {
            $table->foreign(['id_toko'], 'validasi_penjual_ibfk_1')->references(['id_toko'])->on('toko')->onUpdate('no action')->onDelete('no action');
            $table->foreign(['id_status_validasi'], 'validasi_penjual_ibfk_2')->references(['id_status_validasi'])->on('status_validasi')->onUpdate('no action')->onDelete('no action');
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::table('validasi_penjual', function (Blueprint $table) {
            $table->dropForeign('validasi_penjual_ibfk_1');
            $table->dropForeign('validasi_penjual_ibfk_2');
        });
    }
};
