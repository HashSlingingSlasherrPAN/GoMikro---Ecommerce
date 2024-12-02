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
        Schema::table('products', function (Blueprint $table) {
            $table->dropForeign(['categories_id']); // Menghapus foreign key constraint jika ada
            $table->dropColumn('categories_id'); // Menghapus kolom categories_id
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::table('products', function (Blueprint $table) {
            $table->foreignId('categories_id')->constrained()->onDelete('cascade'); // Menambahkan kolom kembali jika diperlukan
        });
    }
};
