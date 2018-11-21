<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Cable extends Model
{
    protected $fillable = [
        'nombre', 'canales','precio',
    ];
}
