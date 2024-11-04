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
        Schema::table('detail_order', function (Blueprint $table) {
            $table->foreign(['id_order'], 'detail_order_ibfk_1')->references(['id_order'])->on('order')->onUpdate('no action')->onDelete('no action');
            $table->foreign(['id_produk'], 'detail_order_ibfk_2')->references(['id_produk'])->on('produk')->onUpdate('no action')->onDelete('no action');
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::table('detail_order', function (Blueprint $table) {
            $table->dropForeign('detail_order_ibfk_1');
            $table->dropForeign('detail_order_ibfk_2');
        });
    }
};
