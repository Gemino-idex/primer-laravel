<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class cliente extends Model
{
    protected $fillable = [
        'nombre',
        'apellido',
        'dni',
        'email',
        'telefono'
    ];
}
