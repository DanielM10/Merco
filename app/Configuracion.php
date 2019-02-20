<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Configuracion extends Model
{
    //
    public $timestamps = false;
    protected $table = 'Configuracion';
    
    protected $fillable = [
        'Descripcion',
        'Valor'
    ];
}
