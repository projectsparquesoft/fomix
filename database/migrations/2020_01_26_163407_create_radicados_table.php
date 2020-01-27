<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateRadicadosTable extends Migration
{
    
    public function up()
    {
        Schema::create('radicados', function (Blueprint $table) {
            $table->bigIncrements('id_radicado');

            $table->bigInteger('codigo_radicado')->unsigned()->unique()->comment('radicado creado a partir del codigo + fecha de creacion');
            
            $table->timestamps();
        });
    }

    
    public function down()
    {
        Schema::dropIfExists('radicados');
    }
}
