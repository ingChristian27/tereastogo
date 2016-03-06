<?php

use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class Tareas extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
         Schema::create('tareas', function (Blueprint $table) {
            $table->increments('id');
            $table->string('asignatura');
            $table->integer('valor');
            $table->date('fecha_publicacion');
            $table->date('fecha_entrega');
            $table->string('descripcion', 60);
            $table->timestamps();
            
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('tareas');
    }
}
