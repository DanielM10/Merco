<?php

namespace App;

use Illuminate\Database\Eloquent\Model;
class Cxp extends Model
{
    public $timestamps = false;
    protected $table = 'Cxp';

    protected $fillable = [
        'idintelisis' => 'required'
        ,'Empresa' => 'required'
        ,'Mov' => 'required'
        ,'MovID' => 'required'
        ,'FechaEmision' => 'required'
        ,'UltimoCambio' => 'required'
        ,'Concepto' => 'required'
        ,'Importe' => 'required'
        ,'Impuestos' => 'required'
        ,'Origen' => 'required'
        ,'OrigenID' => 'required'
    ];
}
