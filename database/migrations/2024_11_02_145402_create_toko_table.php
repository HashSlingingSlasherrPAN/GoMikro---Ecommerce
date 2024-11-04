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
        Schema::create('toko', function (Blueprint $table) {
            $table->integer('id_toko', true);
            $table->string('nama_toko')->nullable();
            $table->string('alamat_toko')->nullable();
            $table->string('deskripsi_toko')->nullable();
            $table->integer('id_kategori_toko')->nullable()->index('id_kategori_toko');
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('toko');
    }
};
