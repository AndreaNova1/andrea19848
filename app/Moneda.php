<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Moneda extends Model
{

    protected $table='criptomoneda';
    public $timestamps=false;
    protected $fillable=[
        'id', 'logo', 'nombre', 'precio', 'descripcion', 'lenguaje_id'
    ];

    protected $primaryKey='id';
}
