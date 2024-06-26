<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class SalesOrder extends Model
{
    use HasFactory;
    public $incremnting = false;

    protected $table = 'sales_order';
    protected $primaryKey = 'kode_so';
    protected $keyType = 'string';
    protected $fillable = ['kode_so','tanggal','tanggal_sampai','kode_supplier','id_semen','qty','total_harga','kode_mobil','kode_supir','pembayaran','biaya_pemesanan','status','debit','created_at','updated_at'];
}
