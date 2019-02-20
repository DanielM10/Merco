<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateUsuariopermisoTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('UsuarioPermisos', function (Blueprint $table) {
            $table->bigIncrements('IdPermisoU');
            $table->integer('IdMenu');
            $table->foreign('IdMenu')->references('IdMenu')->on('Menu');
            $table->bigInteger('IdUsuario');
            $table->foreign('IdUsuario')->references('IdUsuario')->on('Usuario');
            $table->boolean('Ver');
            $table->boolean('Guardar');
            $table->boolean('Modificar');
            $table->boolean('Imprimir');
            $table->boolean('Eliminar');
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('UsuarioPermisos');
    }
}
