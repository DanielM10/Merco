<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateRolTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('Rol', function (Blueprint $table) {
            $table->increments('IdRol');
            $table->string('Nombre',100);
            $table->boolean('Activo');
            $table->bigInteger('IdUCreo');
            $table->date('FechaCreo');
            $table->bigInteger('IdUModifico')->nullable();
            $table->date('FechaModifico')->nullable();
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('Rol');
    }
}
