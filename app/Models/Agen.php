<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Agen extends Model
{
    use HasFactory;
    protected $table = 'agen';
    protected $primaryKey = 'kode_agen';
    protected $fillable = ['kode_agen', 'nama_agen', 'nama_toko', 'alamat', 'no_hp', 'ktp', 'toko', 'created_at', 'updated_at', ];
}
