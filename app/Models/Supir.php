<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Supir extends Model
{
    use HasFactory;
    protected $table = 'supir';
    protected $primaryKey = 'kode_supir';
    protected $fillable = ['nama_supir','no_hp','alamat','no_sim','ktp','sim','jenis_sim','tanggal_kadaluarsa','created_at','updated_at'];
}
