<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateIndicadoresTable extends Migration
{

    public function up()
    {
        Schema::create('indicadores', function (Blueprint $table) {
            $table->bigIncrements('id_indicador');

            $table->string('nombre_indicador');
            $table->tinyInteger('orden_indicador')->comment('1,2..7');
            $table->tinyInteger('status')->comment('vigente/No vigente');
            

            $table->timestamps();
        });
    }

    public function down()
    {
        Schema::dropIfExists('indicadores');
    }
}
