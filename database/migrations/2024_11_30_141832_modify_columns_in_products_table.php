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
             // Menambahkan kolom baru
             $table->integer('stock')->after('price');
             $table->string('image')->nullable()->after('stock');
             
             // Mengubah tipe data kolom price
             $table->decimal('price', 10, 2)->change();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::table('products', function (Blueprint $table) {
             // Menghapus kolom baru
             $table->dropColumn(['stock', 'image']);
            
             // Mengembalikan tipe data kolom price
             $table->float('price', 8, 2)->change();
        });
    }
};
