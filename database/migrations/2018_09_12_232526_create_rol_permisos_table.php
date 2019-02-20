<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateRolPermisosTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('RolPermisos', function (Blueprint $table) {
            $table->Bigincrements('IdPermiso');
            $table->integer('IdMenu');
            $table->foreign('IdMenu')->references('IdMenu')->on('Menu');
            $table->integer('IdRol');
            $table->foreign('IdRol')-> references('IdRol')->on('Rol');
            $table->boolean('Acceso');
            $table->boolean('Guardar');
            $table->boolean('Especial');
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('RolPermisos');
    }
}
