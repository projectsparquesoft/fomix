<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateDependenciasTable extends Migration
{
    
    public function up()
    {
        Schema::create('dependencias', function (Blueprint $table) {
            $table->bigIncrements('id');

            $table->string('nombre_dependencia', 150);
            $table->text('descripcion')->comment('descripcion minima de las funciones de esta dependencia');
            
            $table->timestamps();
        });
    }

    
    public function down()
    {
        Schema::dropIfExists('dependencias');
    }
}
