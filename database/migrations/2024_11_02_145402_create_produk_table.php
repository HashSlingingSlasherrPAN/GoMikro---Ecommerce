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
        Schema::create('produk', function (Blueprint $table) {
            $table->integer('id_produk', true);
            $table->string('nama_produk')->nullable();
            $table->integer('stok_produk')->nullable();
            $table->string('gambar_produk')->nullable();
            $table->float('harga_produk')->nullable();
            $table->string('deskripsi_produk')->nullable();
            $table->integer('id_kategori_produk')->nullable()->index('id_kategori_produk');
            $table->integer('id_toko')->nullable()->index('id_toko');
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('produk');
    }
};
