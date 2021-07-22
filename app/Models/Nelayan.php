<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Nelayan extends Model
{
    use HasFactory;
    protected $primaryKey='id_nelayan';
    protected $fillable = [
        'nama_nelayan', 'alamat_nelayan', 'notelp_nalayan'
    ];

    protected $hidden = [];
}
