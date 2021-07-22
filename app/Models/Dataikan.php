<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Dataikan extends Model
{
    use HasFactory;
    protected $primaryKey='id_ikan';
    protected $fillable = [
        'nama_ikan', 'harga_ikan'
    ];

    protected $hidden = [];
}
