<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class DeliveryOrder extends Model
{
    use HasFactory;
    public $incremnting = false;
    protected $table = 'delivery_order';
    protected $primaryKey = 'kode_do';
    protected $keyType = 'string';
    protected $fillable = ['kode_do','tanggal','tanggal_sampai','kode_agen','id_semen','qty','total_harga','kode_mobil','kode_supir','pembayaran','biaya_pemesanan','status','debit','created_at','updated_at'];
}
