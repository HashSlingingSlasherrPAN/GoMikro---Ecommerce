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
        Schema::create('pembayaran', function (Blueprint $table) {
            $table->integer('id_pembayaran', true);
            $table->dateTime('tanggal_pembayaran')->nullable();
            $table->float('total_pembayaran')->nullable();
            $table->integer('id_order')->nullable()->index('id_order');
            $table->integer('id_status_pembayaran')->nullable()->index('id_status_pembayaran');
            $table->integer('id_jenis_pembayaran')->nullable()->index('id_jenis_pembayaran');
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('pembayaran');
    }
};
