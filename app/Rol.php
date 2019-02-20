<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Rol extends Model
{
    public $timestamps = false;
    protected $table = 'Rol';
    
    protected $fillable = [
        'Nombre', 'Activo','IdUCreo','IdUModifico','FechaModifico','Protegido','TipoRol'
  ];
}
