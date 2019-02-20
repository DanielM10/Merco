<?php

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class ProfessionSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        // DB::insert('insert into profesion (titulo) values (?)',['Desarrollador web']);

        // DB::statement('SET FOREIGN_KEY_CHECKS=0;');
        // DB::table('profesion')->truncate();
        // DB::statement('SET FOREIGN_KEY_CHECKS=1;');


        // DB::table('profesion')->insert([
        //     'titulo' => 'Desarrollador back-end',
        // ]);

        // \App\Profesion::create([
        //     'titulo'=>'Desarrollador back-end',
        // ]);

        DB::table('profesion')->insert([
            'titulo' => 'Desarrollador front-end',
        ]);

        DB::table('profesion')->insert([
            'titulo' => 'Diseñador',
        ]);
    }
}
