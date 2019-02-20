<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateMenuTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('Menu', function (Blueprint $table) {
            $table->increments('IdMenu');
            $table->integer('IdMenuPadre')->nullable();
            $table->string('Descipcion',50);
            $table->string('Controlador',30)->nullable();
            $table->string('Accion',30)->nullable();
            $table->boolean('Activo');
            $table->bigInteger('Orden');
            $table->integer('Nivel');
            $table->string('Icono',20)->nullable();
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('Menu');
    }
}
