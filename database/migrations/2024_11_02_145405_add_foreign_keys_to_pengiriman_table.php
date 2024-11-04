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
        Schema::table('pengiriman', function (Blueprint $table) {
            $table->foreign(['id_order'], 'pengiriman_ibfk_1')->references(['id_order'])->on('order')->onUpdate('no action')->onDelete('no action');
            $table->foreign(['id_status_pengiriman'], 'pengiriman_ibfk_2')->references(['id_status_pengiriman'])->on('status_pengiriman')->onUpdate('no action')->onDelete('no action');
            $table->foreign(['id_layanan_pengirim'], 'pengiriman_ibfk_3')->references(['id_layanan_pengirim'])->on('layanan_pengirim')->onUpdate('no action')->onDelete('no action');
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::table('pengiriman', function (Blueprint $table) {
            $table->dropForeign('pengiriman_ibfk_1');
            $table->dropForeign('pengiriman_ibfk_2');
            $table->dropForeign('pengiriman_ibfk_3');
        });
    }
};
