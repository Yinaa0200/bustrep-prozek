<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Suplier extends Model
{
    protected $table = 'suplier';

    protected $fillable = [
        'kode_suplier',
        'nama_suplier',
        'alamat_suplier',
        'no_telp_suplier',
    ];
}
