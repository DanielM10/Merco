<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Profesion extends Model
{
    //
    protected $table = 'profesion';
    public $timestamps = false;
    
    protected $fillable = [
        'titulo'=> 'required'
  ];
}
