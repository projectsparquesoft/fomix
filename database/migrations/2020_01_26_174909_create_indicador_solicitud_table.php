<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateIndicadorSolicitudTable extends Migration
{

    public function up()
    {
        Schema::create('indicador_solicitud', function (Blueprint $table) {
            $table->bigIncrements('id');

            $table->bigInteger('indicador_id')->unsigned();
            $table->bigInteger('solicitud_id')->unsigned();

            $table->tinyInteger('status')->comment('Vigente/No Vigente');

            $table->foreign('indicador_id')
                ->references('id')
                ->on('indicadores')
                ->onDelete('RESTRICT')
                ->onUpdate('CASCADE');

            $table->foreign('solicitud_id')
                ->references('id')
                ->on('solicitudes')
                ->onDelete('RESTRICT')
                ->onUpdate('CASCADE');

            $table->timestamps();
        });
    }

    public function down()
    {
        Schema::dropIfExists('indicador_solicitud');
    }
    
}
