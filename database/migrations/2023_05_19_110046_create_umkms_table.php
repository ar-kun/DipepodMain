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
        Schema::create('umkms', function (Blueprint $table) {
            $table->id();
            // $table->foreignId('user_id');
            $table->foreignId('category_id');
            $table->string('slug')->unique();
            $table->string('nama_product');
            $table->string('nama_penjual');
            $table->text('alamat_penjual');
            $table->string('image');
            // $table->string('foto_ktp')->nullable();
            $table->string('contact');
            $table->string('link_shopee')->nullable();
            $table->string('link_tokopedia')->nullable();
            $table->string('link_lainnya')->nullable();
            $table->integer('harga_minimum');
            $table->integer('harga_maximum')->nullable();
            $table->text('deskripsi');
            $table->string('kondisi_penyimpanan')->nullable();
            $table->string('berat_produk')->nullable();
            $table->string('expired')->nullable();
            $table->boolean('persetujuan')->default(false);
            $table->timestamp('published_at')->nullable();
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('umkms');
    }
};
