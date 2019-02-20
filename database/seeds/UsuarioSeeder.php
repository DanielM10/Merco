<?php

use Illuminate\Database\Seeder;

class UsuarioSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        //
        
        DB::table('usuario')->insert([
            'NumEmpleado'=>'2',
            'Nombre'=>'Daniel',
            'ApPaterno'=>'Morgado',
            'ApMaterno'=>'Morales',
            'Correo'=>'admin@sistemas.com',
            'IdRol'=>'1',
            'IdUGerente'=>'NULL',
            'IdUSupervisor'=>'1',
            'DepartamentoId'=>'4',
            'IntentosBloqueo'=>'10',
            'Activo'=>'True',
            'Bloqueado'=>'false',
            'Password'=>bcrypt('123456'),
            'FechaContraseña'=>'2018-10-25',
            'IdUcreo'=>'1',
            'FechaCreo'=>'2018-10-25',
            'IdUMod'=>'1',
            'FechaModifico'=>'',
            'DepartamentoExtranjeroId'=>'',
            'UsuarioActiveDirectory'=>'DanielM'
        ]);
    }
}
