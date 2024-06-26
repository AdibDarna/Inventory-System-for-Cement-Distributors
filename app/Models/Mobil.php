<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Mobil extends Model
{
    use HasFactory;
    protected $table = 'mobil';
    protected $primaryKey = 'kode_mobil';
    protected $fillable = ['kode_mobil','status_kepemilikan','transportir','plat_nomor','jenis_truk','merek_truk','kapasitas','nomor_stnk','nomor_rangka','nomor_gps','mobil','stnk','created_at','updated_at'];
}
