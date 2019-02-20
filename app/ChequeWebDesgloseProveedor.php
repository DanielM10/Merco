<?php

namespace App;

use Illuminate\Database\Eloquent\Model;
class ChequeWebDesgloseProveedor extends Model
{
    public $timestamps = false;
    protected $table = 'ChequeWebDesgloseProveedor';

    protected $fillable = [        
      'Referencia' => 'required'
      ,'concepto' => 'required'
      ,'FechaEmision' => 'required'
      ,'Empresa' => 'required'
      ,'Modulo' => 'required'
      ,'ID' => 'required'
      ,'IDM' => 'required'
      ,'Mov' => 'required'
      ,'MovID' => 'required'
      ,'Importe' => 'required'
      ,'ORDEN' => 'required'
      ,'Contacto' => 'required'
      ,'Programa' => 'required'
      ,'EndosoGmerc' => 'required'
      ,'DescuentoTotal' => 'required'
      ,'DescuentoCedis' => 'required'
      ,'DescuentoPublicidad' => 'required'
      ,'Porcentaje4' => 'required'
    ];
}