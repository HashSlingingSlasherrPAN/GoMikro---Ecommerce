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
        Schema::create('order', function (Blueprint $table) {
            $table->integer('id_order', true);
            $table->dateTime('tanggal_order')->nullable();
            $table->string('catatan')->nullable();
            $table->unsignedInteger('id_user')->nullable()->index('id_user');
            $table->integer('id_status_order')->nullable()->index('id_status_order');
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('order');
    }
};
