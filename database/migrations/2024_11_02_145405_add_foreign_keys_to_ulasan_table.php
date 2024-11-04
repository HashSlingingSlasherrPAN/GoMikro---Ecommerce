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
        Schema::table('ulasan', function (Blueprint $table) {
            $table->foreign(['id_user'], 'ulasan_ibfk_1')->references(['id_user'])->on('user')->onUpdate('no action')->onDelete('no action');
            $table->foreign(['id_produk'], 'ulasan_ibfk_2')->references(['id_produk'])->on('produk')->onUpdate('no action')->onDelete('no action');
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::table('ulasan', function (Blueprint $table) {
            $table->dropForeign('ulasan_ibfk_1');
            $table->dropForeign('ulasan_ibfk_2');
        });
    }
};
