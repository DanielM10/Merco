<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateUsuarioTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('Usuario', function (Blueprint $table) {
            $table->bigIncrements('IdUsuario')->unique();
            $table->string('NumEmpelado',100);
            $table->string('Nombre',100);
            $table->string('ApPaterno',100);
            $table->string('ApMaterno',100);
            $table->string('Correo',300)->Unique();
            $table->integer('IdRol');
            $table->foreign('IdRol')->references('IdRol')->on('Rol');
            $table->bigInteger('IdUGerente')->nullable();
            $table->bigInteger('IdUSupervisor')->nullable();
            $table->bigInteger('DepartamentoId')->nullable();
            $table->foreign('DepartamentoId')->references('IdCatalogo')->on('CatalogoGeneral');
            $table->integer('IntentosBloqueo')->nullable();
            $table->boolean('Activo');
            $table->boolean('Bloqueado');
            $table->string('password',100);
            $table->dateTime('FechaContraseña');
            $table->bigInteger('IdUCreo');
            $table->dateTime('FechaCreo');
            $table->bigInteger('IdUMod')->nullable();
            $table->dateTime('FechaModifico')->nullable();
            $table->bigInteger('DepartamentoExtranjeroId')->nullable();
            $table->string('UsuarioActiveDirectory',255);
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('Usuario');
    }
}
