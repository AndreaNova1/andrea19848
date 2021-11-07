<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class lenguaje_P extends Model
{
    protected $table='lenguaje_programacion';
    public $timestamps=false;
    protected $fillable=[
        'id', 'descripcion_lenguaje'
    ];

    protected $primaryKey='id';
}

