<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Detailproduksi extends Model
{
    use HasFactory;
    protected $primaryKey='id_dp';
    protected $fillable = [
        'uraian', 'tonage', 'raman'
    ];

    protected $hidden = [];
}
