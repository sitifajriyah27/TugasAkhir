<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Daftarproduksi extends Model
{
    use HasFactory;
    protected $primaryKey='id_dp';
    protected $fillable = [
        'tanggal', 'raman', 'tonage'
    ];

    protected $hidden = [];
}
