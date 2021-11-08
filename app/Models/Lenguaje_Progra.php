<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Lenguaje_Progra extends Model
{
    protected $table='lenguaje_programacion';
    public $timestamps=false;
    protected $fillable=[
        'id', 'lenguaje_des'
    ];

    protected $primaryKey='id';
}

