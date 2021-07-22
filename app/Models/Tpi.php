<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Tpi extends Model
{
    use HasFactory;
    protected $primaryKey='id_tpi';
    protected $fillable = [
        'nama_tpi', 'username_tpi', 'password_tpi', 'alamat_tpi', 'notelp_tpi'
    ];

    protected $hidden = [];
}