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
        Schema::table('produk', function (Blueprint $table) {
            $table->foreign(['id_kategori_produk'], 'produk_ibfk_1')->references(['id_kategori_produk'])->on('kategori_produk')->onUpdate('no action')->onDelete('no action');
            $table->foreign(['id_toko'], 'produk_ibfk_2')->references(['id_toko'])->on('toko')->onUpdate('no action')->onDelete('no action');
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::table('produk', function (Blueprint $table) {
            $table->dropForeign('produk_ibfk_1');
            $table->dropForeign('produk_ibfk_2');
        });
    }
};
