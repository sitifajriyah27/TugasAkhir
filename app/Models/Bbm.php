<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Bbm extends Model
{
    use HasFactory;
    protected $primaryKey='id_bhnbakar';
    protected $fillable = [
        'merk_mesin', 'type_mesin', 'merk_mesin', 'kecepatan', 'jarak_tempuh'
    ];

    protected $hidden = [];
}
