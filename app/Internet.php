<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Internet extends Model
{
	protected $fillable = [
        'descripcion', 'precio',
    ];
}
