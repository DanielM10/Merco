<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class CxpWebPortalProveedor extends Model
{
    public $timestamps = false;
    protected $table = 'CxpWebPortalProveedor';

    protected $fillable = [
        'mov' => 'required'
      ,'movid' => 'required'
      ,'importe' => 'required'
      ,'FechaEmision' => 'required'
    ];
}
