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
        Schema::create('validasi_penjual', function (Blueprint $table) {
            $table->integer('id_validasi', true);
            $table->dateTime('tanggal_pengajuan')->nullable();
            $table->dateTime('tanggal_validasi')->nullable();
            $table->string('dokumen')->nullable();
            $table->string('catatan')->nullable();
            $table->integer('id_toko')->nullable()->index('id_toko');
            $table->integer('id_status_validasi')->nullable()->index('id_status_validasi');
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('validasi_penjual');
    }
};
