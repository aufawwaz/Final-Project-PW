<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Saldo extends Model
{
    protected $fillable = [
        'jenis',
        'jumlah',
        'nama'
    ];
}
