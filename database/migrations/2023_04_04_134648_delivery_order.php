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
        Schema::create('delivery_order', function(Blueprint $table){
            $table->string('kode_do')->primary();
            $table->string('tanggal')->nullable();
            $table->string('tanggal_sampai')->nullable();
            $table->unsignedBigInteger('kode_agen');
            $table->foreign('kode_agen')->references('kode_agen')->on('agen');
            $table->unsignedBigInteger('id_semen');
            $table->foreign('id_semen')->references('id_semen')->on('semen');
            $table->integer('qty')->nullable();
            $table->integer('total_harga')->nullable();
            $table->unsignedBigInteger('kode_mobil');
            $table->foreign('kode_mobil')->references('kode_mobil')->on('mobil');
            $table->unsignedBigInteger('kode_supir');
            $table->foreign('kode_supir')->references('kode_supir')->on('supir');
            $table->string('pembayaran')->nullable();
            $table->string('biaya_pemesanan')->nullable();
            $table->string('status')->nullable();
            $table->string('debit')->nullable();
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('delivery_order');
    }
};
