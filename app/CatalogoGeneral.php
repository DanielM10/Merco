<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class CatalogoGeneral extends Model
{
    public $timestamps = false;
    protected $table = 'CatalogoGeneral';
    
    protected $fillable = [
        'IdTabla',
        'Cabecera',
        'DescLarga',
        'Numerico',
        'Activo',
        'Dependencia',
        'ValorDependencia',
        'IdUCreo',
        'FechaCreo',
        'IdUMod',
        'FechaModifico'
    ];
}
