<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Pendapatanikan extends Model
{
    use HasFactory;
    protected $primaryKey='id_pendapatan';
    protected $fillable = [
        'ket', 'satuan', 'kptk', 'ck', 'jumlah'
    ];

    protected $hidden = [];
}
