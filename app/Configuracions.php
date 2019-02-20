<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Configuracions extends Model
{
    //
    protected $table = 'Configuraciones';
    
    protected $fillable = [
        'Descripcion',
        'Valor'
    ];
}
