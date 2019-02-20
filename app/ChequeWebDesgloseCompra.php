<?php

namespace App;

use Illuminate\Database\Eloquent\Model;
class ChequeWebDesgloseCompra extends Model
{
    public $timestamps = false;
    protected $table = 'ChequeWebDesgloseCompra';

    protected $fillable = [        
      'Mov' => 'required'
      ,'MovID' => 'required'
      ,'IdCompra' => 'required'
      ,'DescuentoTotal' => 'required'
      ,'DescuentoCedis' => 'required'
      ,'DescuentoPublicidad' => 'required'
    ];
}
