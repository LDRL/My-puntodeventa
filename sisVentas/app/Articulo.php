<?php

namespace sisVentas;

use Illuminate\Database\Eloquent\Model;

class Articulo extends Model
{
    protected $table='articulo';
    protected $primaryKey = 'idarticulo';
    
    public $timestamps=false;
    
    protected $fillable = [
        'codigo',
        'nombre',
        'stock',
        'descripcion',
        'imagen',
        'estado',
        'idCategoria'    
    ];

    
    protected $guarded =[
        
    ];
}
