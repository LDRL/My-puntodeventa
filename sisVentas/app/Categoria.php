<?php

namespace sisVentas;

use Illuminate\Database\Eloquent\Model;

class Categoria extends Model
{
    protected $table='presentacion';
    protected $primaryKey = 'idpresentacion';

    public $timestamps=false;

    protected $fillable = [
        'nombre',
        'estado'
    ];


    protected $guarded =[

    ];
}
