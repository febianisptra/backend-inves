<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

return new class extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('peminjaman', function (Blueprint $table) {
            $table->integer('id_peminjaman')->autoIncrement();
            // $table->integer('nip');
            $table->string('ruang');
            $table->string('nama_guru');
            $table->integer('id_barang');
            $table->foreign('id_barang')->references('id_barang')->on('barang');
            $table->date('tanggal_peminjaman');
            $table->enum('status', (['masih_dipinjam', 'barang_rusak', 'dikembalikan', 'sedang_diperbaiki']))->default('masih_dipinjam');
            $table->text('keperluan');
            // $table->string('keterangan');
            // $table->string('kategori_barang');
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('peminjaman');
    }
};
