<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateIndicadorLineaTable extends Migration
{

    public function up()
    {
        Schema::create('indicador_linea', function (Blueprint $table) {
            $table->bigIncrements('id_indicador_linea');

            $table->bigInteger('indicador_id')->unsigned();
            $table->bigInteger('linea_id')->unsigned();

            $table->tinyInteger('status')->comment('Vigente/No Vigente');

            $table->foreign('indicador_id')
                ->references('id_indicador')
                ->on('indicadores')
                ->onDelete('RESTRICT')
                ->onUpdate('CASCADE');

            $table->foreign('linea_id')
                ->references('id_linea')
                ->on('lineas')
                ->onDelete('RESTRICT')
                ->onUpdate('CASCADE');

            $table->timestamps();
        });
    }

    public function down()
    {
        Schema::dropIfExists('indicador_linea');
    }
}
