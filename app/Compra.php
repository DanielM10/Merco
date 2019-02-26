<?php

namespace App;

use Illuminate\Database\Eloquent\Model;
class Compra extends Model
{
    public $timestamps = false;
    protected $table = 'Compra';

    protected $fillable = [
        'ID' => 'required'
        ,'Empresa' => 'required'
        ,'Mov' => 'required'
        ,'MovID' => 'required'
        ,'FechaEmision' => 'datetime:Y-m-d'
        ,'UltimoCambio' => 'required'
        ,'Concepto' => 'required'
        ,'Moneda' => 'required'
        ,'TipoCambio' => 'required'
        ,'Usuario' => 'required'
        ,'Referencia' => 'required'
        ,'Observaciones' => 'required'
        ,'Estatus' => 'required'
        ,'Proveedor' => 'required'
        ,'FormaEnvio' => 'required'
        ,'FechaRequerida' => 'datetime:Y-m-d'
        ,'Almacen' => 'required'
        ,'Condicion' => 'required'
        ,'DescuentoGlobal' => 'required'
        ,'Importe' => 'required'
        ,'Impuestos' => 'required'
        ,'OrigenTipo' => 'required'
        ,'Origen' => 'required'
        ,'OrigenID' => 'required'
        ,'Sucursal' => 'required'
        ,'IVA' => 'required'
        ,'IEPS' => 'required'
    ];
}
