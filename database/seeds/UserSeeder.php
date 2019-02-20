<?php

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class UserSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        //$profesion = DB::select('SELECT IdProfesion FROM profesion LIMIT0,1');
        //$profesion = DB::select('SELECT IdProfesion FROM profesion WHERE titulo =? LIMIT0,1', ["Diseñador"]);
        //dd($profesion);

        //$idProfesion = DB::table('profesion')->select('IdProfesion')->where('titulo','Diseñador')->value('IdProfesion');

        DB::table('users')->insert([
            'name'=>'Daniel',
            'email'=>'admin@sistemas1.com',
            'password'=>bcrypt('654321'),
            'remember_token'=>'NULL',
            //'created_at'=> 'NULL',
            //'updated_at'=>'NULL',
            
             'NumEmpleado'=>'1',
             'ApPaterno'=>'Morgado',
             'ApMaterno'=>'Morales',
             'IdRol'=>'2',            
             'Activo'=>'True',
             'Bloqueado'=>'False',
             //'FechaContraseña'=>'NULL',
             'IdUCreo'=>'1',
             //'FechaCreo'=>'NULL',
             'IdUMod'=>'1',
             //'FechaModifico'=>'NULL',
             
        ]);
    }
}
