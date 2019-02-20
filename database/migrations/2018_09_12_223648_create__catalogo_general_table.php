<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateCatalogoGeneralTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('CatalogoGeneral', function (Blueprint $table) {
            $table->bigIncrements('IdCatalogo');
            $table->integer('IdTabla')->nullable();
            $table->bigInteger('Cabecera');
            $table->string('DescLarga',400);
            $table->integer('Numerico');
            $table->boolean('Activo');
            $table->boolean('Dependencia');
            $table->boolean('ValorDependencia')->nullabe();
            $table->bigInteger('IdUCreo');
            $table->dateTime('FechaCreo');
            $table->bigInteger('IdUMod')->nullable();
            $table->dateTime('FechaModifico')->nullable();
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('CatalogoGeneral');
    }
}
