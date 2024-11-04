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
        Schema::table('pembayaran', function (Blueprint $table) {
            $table->foreign(['id_order'], 'pembayaran_ibfk_1')->references(['id_order'])->on('order')->onUpdate('no action')->onDelete('no action');
            $table->foreign(['id_status_pembayaran'], 'pembayaran_ibfk_2')->references(['id_status_pembayaran'])->on('status_pembayaran')->onUpdate('no action')->onDelete('no action');
            $table->foreign(['id_jenis_pembayaran'], 'pembayaran_ibfk_3')->references(['id_jenis_pembayaran'])->on('jenis_pembayaran')->onUpdate('no action')->onDelete('no action');
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::table('pembayaran', function (Blueprint $table) {
            $table->dropForeign('pembayaran_ibfk_1');
            $table->dropForeign('pembayaran_ibfk_2');
            $table->dropForeign('pembayaran_ibfk_3');
        });
    }
};
