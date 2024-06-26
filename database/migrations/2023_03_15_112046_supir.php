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
        Schema::create('supir', function (Blueprint $table) {
            $table->bigIncrements('kode_supir');
            $table->string('nama_supir', 255)->nullable();
            $table->char('no_hp', 255)->nullable();
            $table->string('alamat', 255)->nullable();
            $table->char('no_sim', 255)->nullable();
            $table->string('jenis_sim', 255)->nullable();
            $table->string('tanggal_kadaluarsa', 255)->nullable();
            $table->char('ktp', 255)->nullable();
            $table->char('sim', 255)->nullable();
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('supir');
    }
};
