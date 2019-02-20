<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateProfesionTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('profesion', function (Blueprint $table) {
            $table->increments('IdProfesion');
            $table->string('titulo',100)->unique();
            $table->dateTime('created_at')->nullable();
            $table->dateTime('updated_at')->nullable();
            
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('profesion');
    }
}
