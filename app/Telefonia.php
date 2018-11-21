<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Telefonia extends Model
{
    protected $fillable = [
        'descripcion', 'precio',
    ];
}
