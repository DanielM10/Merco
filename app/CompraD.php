<?php

namespace App;

use Illuminate\Database\Eloquent\Model;
class CompraD extends Model
{
    public $timestamps = false;
    protected $table = 'CompraD';

    protected $fillable = [
        'ID' => 'required'
      ,'RenglonID' => 'required'
      ,'Cantidad' => 'required'
      ,'Articulo' => 'required'
      ,'Costo' => 'required'
      ,'Impuesto1' => 'required'
      ,'Impuesto2' => 'required'
      ,'Impuesto3' => 'required'
      ,'DescuentoLinea' => 'required'
      ,'DescuentoImporte' => 'required'
      ,'Aplica' => 'required'
      ,'AplicaID' => 'required'
      ,'Unidad' => 'required'
      ,'Factor' => 'required'
      ,'CantidadInventario' => 'required'
      ,'IVA' => 'required'
      ,'IEPS' => 'required'
    ];
}
