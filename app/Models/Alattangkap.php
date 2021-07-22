<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Alattangkap extends Model
{
    use HasFactory;
    protected $primaryKey='id_alat';
    protected $fillable = [
        'nama_alat'
    ];

    protected $hidden = [];
}
