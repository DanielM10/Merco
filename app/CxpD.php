<?php

namespace App;

use Illuminate\Database\Eloquent\Model;
class CxpD extends Model
{
    public $timestamps = false;
    protected $table = 'CxpD';

    protected $fillable = [
        'ID' => 'required'
      ,'Aplica' => 'required'
      ,'AplicaID' => 'required'
    ];
}
