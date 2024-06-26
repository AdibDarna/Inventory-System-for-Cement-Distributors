<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Semen extends Model
{
    use HasFactory;

    protected $table = 'semen';
    protected $primaryKey = 'id_semen';
    protected $fillable = ['merek_semen', 'jumlah', 'harga_beli', 'harga_jual', 'eoq', 'rop', 'safety_stock', 'biaya_pemesanan_semen', 'biaya_penyimpanan', 'kode_supplier', 'lead_time', 'created_at', 'updated_at'];
}
