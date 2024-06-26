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
        Schema::create('agen', function (Blueprint $table) {
            $table->bigIncrements('kode_agen');
            $table->string('nama_agen', 255)->nullable();
            $table->string('nama_toko', 255)->nullable();
            $table->string('alamat', 255)->nullable();
            $table->char('no_hp', 255)->nullable();
            $table->char('ktp', 255)->nullable();
            $table->char('toko', 255)->nullable();
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('agen');
    }
};
