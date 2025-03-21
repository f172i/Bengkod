<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class periksa extends Model
{
    //
    protected $fillable = [
        'id_pasien',
        'id_dokter',
        'tanggal',
        'catatan',
        'biaya_periksa',
    ];
}
