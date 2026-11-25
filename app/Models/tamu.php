<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Tamu extends Model
{
    protected $fillable = [
        'nama',
        'status_pengunjung',
        'alamat',
        'pihak_yang_dituju',
        'keperluan',
        'keterangan',
        'persetujuan'
    ];
}
