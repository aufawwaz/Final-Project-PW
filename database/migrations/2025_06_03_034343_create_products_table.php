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
        Schema::create('products', function (Blueprint $table) {
            $table->id();
            $table->string('nama_produk');
            $table->string('image')->nullable();
            $table->string('satuan')->nullable();
            $table->bigInteger('harga_jual');
            $table->bigInteger('harga_modal')->nullable()->default(0);
            $table->string('kategori')->nullable();
            $table->text('deskripsi')->nullable();
            $table->integer('stok')->nullable()->default(0);
            $table->foreignId('user_id')->constrained()->onDelete('cascade');
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('products');
    }
};
