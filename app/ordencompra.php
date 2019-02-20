<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class ordencompra extends Model
{
    public $timestamps = false;
    protected $table = 'Compra';
    
    protected $fillable = [
      'ID','Empresa','Mov','MovID','FechaEmision','UltimoCambio','Concepto','Moneda','TipoCambio','Usuario','Referencia','Observaciones','Estatus','Proveedor','FormaEnvio','FechaRequerida','Almacen','Condicion','DescuentoGlobal','Importe','Impuestos','OrigenTipo','Origen','OrigenID','Sucursal'
  ];
}
