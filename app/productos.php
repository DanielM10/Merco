<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Productos extends Model
{
    public $timestamps = false;
    protected $table = 'Art';
    
    protected $fillable = [
        'Articulo',
        'Descripcion1',
        'Grupo',
        'Categoria',
        'Familia',
        'Unidad',
        'UnidadCompra',
        'UnidadTraspaso',
        'TipoCompra',
        'TipoCatalogo',
        'Proveedor',
        'Activo',
        'Protegido'
  ];
}
