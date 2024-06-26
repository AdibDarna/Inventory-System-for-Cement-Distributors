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
        Schema::create('semen', function (Blueprint $table) {
            $table->bigIncrements('id_semen');
            $table->string('merek_semen', 255);
            $table->bigInteger('jumlah');
            $table->bigInteger('harga_beli');
            $table->bigInteger('harga_jual');
            $table->float('eoq');
            $table->float('rop');
            $table->bigInteger('safety_stock');
            $table->string('biaya_pemesanan', 255);
            $table->string('biaya_penyimpanan', 255);
            $table->string('lead_time', 255);

            $table->unsignedBigInteger('kode_supplier');
            $table->foreign('kode_supplier')->references('kode_supplier')->on('supplier');
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('semen');
    }
};
