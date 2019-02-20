<?php

namespace App;

use Illuminate\Notifications\Notifiable;
use Illuminate\Foundation\Auth\User as Authenticatable;

class User extends Authenticatable
{
    use Notifiable;

    /**
     * The attributes that are mass assignable.
     *
     * @var array
     */
    public $timestamps = false;
    protected $table = 'users';

    protected $fillable = [
        'email'  => 'required', 
        'password'  => 'required',
        'name'  => 'required',
        'NumEmpleado'  => 'required|unique:posts',
        'ApPaterno'  => 'required',
        'ApMaterno' => 'required',
        //'IdRol'  => 'required',
        'Bloqueado'  => 'required',
        'FechaContraseña'  => 'required',
        'IdUCreo'  => 'required',
        'IdUMod'  => 'required',
        'FechaModifico' => 'required',
        'Intentos_Bloqueo' => 'required'
    ];

    /**
     * The attributes that should be hidden for arrays.
     *
     * @var array
     */
    public function username()
    {
        return $this->Correo;
    }

    public function getAuthPassword()
    {
        return $this->password;
    }


}
