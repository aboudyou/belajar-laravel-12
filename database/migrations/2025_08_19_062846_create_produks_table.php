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
        //sintaks dibawah untuk membuat tabel produk
        Schema::create('tb_produk', function (Blueprint $table) {
    $table->id();
    $table->string('nama_produk');
    $table->integer('harga');
    $table->text('deskripsi_produk'); // ✅ tambahkan kolom ini
    $table->unsignedBigInteger('kategori_id');
    $table->timestamps();
});

    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('produks');
    }
};
