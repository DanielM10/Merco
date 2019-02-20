<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class creausuario extends Model
{
    //
        //
        public $timestamps = false;
        protected $table = 'users';
        
        protected $fillable = [            
            'name',
            'email',
            'password',
            'remember_token',
            'created_at',
            'updated_at',
            'idProfesion',
            'NumEmpleado',           
            'ApPaterno',
            'ApMaterno',            
            'IdRol',
            'IdUGerente',
            'IdUSupervisor',
            'DepartamentoId',
            'IntentosBloqueo',
            'Activo',
            'Bloqueado',
            'password',
            'FechaContraseña',
            'IdUcreo',
            'FechaCreo',
            'IdUMod',
            'FechaModifico',
            'DepartamentoExtranjeroId',
            'UsuarioActiveDirectory'
        ];
}
