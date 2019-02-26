<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Directorio extends Model
{
    public $timestamps = false;
    protected $table = 'Sucursal';
    
    protected $fillable = [
       'Sucursal','Nombre','Direccion','Ciudad','Estado','Latitud','Longitud'
  ];
}
