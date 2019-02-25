<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Proveedor extends Model
{
    public $timestamps = false;
    protected $table = 'Prov';
    
    protected $fillable = [
        'Proveedor','Nombre','Categoria','Estatus','Direccion','Contacto1','eMail1','Telefonos',
  ];
}
