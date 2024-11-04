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
        Schema::create('pengiriman', function (Blueprint $table) {
            $table->integer('id_pengiriman', true);
            $table->dateTime('tanggal_pengiriman')->nullable();
            $table->string('alamat_pengiriman')->nullable();
            $table->integer('id_order')->nullable()->index('id_order');
            $table->integer('id_status_pengiriman')->nullable()->index('id_status_pengiriman');
            $table->integer('id_layanan_pengirim')->nullable()->index('id_layanan_pengirim');
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('pengiriman');
    }
};
