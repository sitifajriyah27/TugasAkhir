<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Pegawai extends Model
{
    use HasFactory;
    protected $primaryKey='id_pgw';
    protected $fillable = [
        'nama_pgw', 'jabatan', 'telp', 'alamat'
    ];

    protected $hidden = [];
}
