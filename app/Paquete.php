<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Paquete extends Model
{
    protected $fillable = [
        'nombre', 'descripcion', 'telefonia_id', 'cable_id', 'internet_id'
    ];
}
