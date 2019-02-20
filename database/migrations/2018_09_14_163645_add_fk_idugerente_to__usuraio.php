<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class AddFkIdugerenteToUsuraio extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::table('Usuario',function(Blueprint $table){
            $table->foreign('IdUGerente')->references('IdUsuario')->on('Usuario');
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::table('Usuario', function(Blueprint $table){
            $table->dropForeign(['IdUGerente']);
        });
    }
}
