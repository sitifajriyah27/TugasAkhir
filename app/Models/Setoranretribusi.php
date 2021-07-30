<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Setoranretribusi extends Model
{
    use HasFactory;
    protected $primaryKey='id_setoran';
    protected $fillable = [
        'tgl', 'tonage', 'raman', 'retribusi', 'ket'
    ];

    protected $hidden = [];
}
