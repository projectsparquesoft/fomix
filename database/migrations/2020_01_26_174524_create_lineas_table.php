<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateLineasTable extends Migration
{
    
    public function up()
    {
        Schema::create('lineas', function (Blueprint $table) {
            $table->bigIncrements('id_linea');

            $table->string('nombre_linea');
            $table->tinyInteger('orden_linea')->comment('1,2..7');
            $table->tinyInteger('status')->comment('vigente/No vigente');
            
            $table->timestamps();
        });
    }

    
    public function down()
    {
        Schema::dropIfExists('lineas');
    }
}
