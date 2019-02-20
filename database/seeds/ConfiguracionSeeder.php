<?php

use Illuminate\Database\Seeder;

class ConfiguracionSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        //
        DB::table('Configuracion')->insert([
            'Descripcion' => 'Servidor',
            'Valor' => 'mail.axsistec.com',
        ]);
        DB::table('Configuracion')->insert([
            'Descripcion' => 'Puerto',
            'Valor' => '587',
        ]);
        DB::table('Configuracion')->insert([
            'Descripcion' => 'x',
            'Valor' => 'x',
        ]);
        DB::table('Configuracion')->insert([
            'Descripcion' => 'Usuario',
            'Valor' => 'fmorgado@axsistec.com',
        ]);
        DB::table('Configuracion')->insert([
            'Descripcion' => 'Contraseña',
            'Valor' => 'danielm10',
        ]);
        DB::table('Configuracion')->insert([
            'Descripcion' => 'Remitente',
            'Valor' => 'Merco',
        ]);
        DB::table('Configuracion')->insert([
            'Descripcion' => 'SSL',
            'Valor' => 'false',
        ]);
        DB::table('Configuracion')->insert([
            'Descripcion' => 'Intentos Bloqueo',
            'Valor' => '3',
        ]);
        DB::table('Configuracion')->insert([
            'Descripcion' => 'Vigencia',
            'Valor' => '30',
        ]);
        DB::table('Configuracion')->insert([
            'Descripcion' => 'Caracteres Minimos',
            'Valor' => '8',
        ]);
        DB::table('Configuracion')->insert([
            'Descripcion' => 'Dias Consulta',
            'Valor' => '8',
        ]);
        DB::table('Configuracion')->insert([
            'Descripcion' => 'x',
            'Valor' => 'x',
        ]);
        DB::table('Configuracion')->insert([
            'Descripcion' => 'Correo Aclaraciones',
            'Valor' => 'fmorgado@axsistec.com',
        ]);
    }
}
