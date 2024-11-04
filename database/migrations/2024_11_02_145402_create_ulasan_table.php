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
        Schema::create('ulasan', function (Blueprint $table) {
            $table->integer('id_ulasan', true);
            $table->dateTime('tanggal_ulasan')->nullable();
            $table->integer('rating')->nullable();
            $table->string('komentar')->nullable();
            $table->unsignedInteger('id_user')->nullable()->index('id_user');
            $table->integer('id_produk')->nullable()->index('id_produk');
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('ulasan');
    }
};
