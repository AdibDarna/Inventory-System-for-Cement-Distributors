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
        Schema::create('mobil', function (Blueprint $table) {
            $table->bigIncrements('kode_mobil');
            $table->string('status_kepemilikan')->nullable();
            $table->char('transportir')->nullable();
            $table->char('plat_nomor')->nullable();
            $table->char('jenis_truk')->nullable();
            $table->char('merek_truk')->nullable();
            $table->char('kapasitas')->nullable();
            $table->char('nomor_stnk')->nullable();
            $table->char('nomor_rangka')->nullable();
            $table->char('nomor_gps')->nullable();
            $table->char('mobil')->nullable();
            $table->char('stnk')->nullable();
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('mobil');
    }
};
