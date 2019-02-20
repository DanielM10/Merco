<?php

namespace App;

use Illuminate\Notifications\Notifiable;
use Illuminate\Database\Eloquent\Model;


class Usuario extends Authenticatable
{
    use Notifiable;

    /**
     * The attributes that are mass assignable.
     *
     * @var array
     */
    protected $table = 'Usuario';

    /**
     * The attributes that should be hidden for arrays.
     *
     * @var array
     */
    // protected $hidden = [
    //     'Contraseña'
    // ];


    use Notifiable;

    protected $fillable = [
          'Correo', 'password',
    ];

    public function getAuthPassword()
    {
        return $this->password;
    }

}
