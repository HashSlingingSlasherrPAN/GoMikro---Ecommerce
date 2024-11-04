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
        Schema::table('detail_keranjang', function (Blueprint $table) {
            $table->foreign(['id_keranjang'], 'detail_keranjang_ibfk_1')->references(['id_keranjang'])->on('keranjang')->onUpdate('no action')->onDelete('no action');
            $table->foreign(['id_produk'], 'detail_keranjang_ibfk_2')->references(['id_produk'])->on('produk')->onUpdate('no action')->onDelete('no action');
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::table('detail_keranjang', function (Blueprint $table) {
            $table->dropForeign('detail_keranjang_ibfk_1');
            $table->dropForeign('detail_keranjang_ibfk_2');
        });
    }
};
