<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreatePoblacionSolicitudTable extends Migration
{

    public function up()
    {
        Schema::create('poblacion_solicitud', function (Blueprint $table) {
            $table->bigIncrements('id');

            $table->bigInteger('poblacion_id')->unsigned();
            $table->bigInteger('solicitud_id')->unsigned();

            $table->integer('numero_persona');
            $table->string('fuente_verificacion', 200);

            $table->foreign('solicitud_id')
                ->references('id')
                ->on('solicitudes')
                ->onDelete('RESTRICT')
                ->onUpdate('CASCADE');

            $table->foreign('poblacion_id')
                ->references('id')
                ->on('poblaciones')
                ->onDelete('RESTRICT')
                ->onUpdate('CASCADE');

            $table->timestamps();
        });
    }

    public function down()
    {
        Schema::dropIfExists('poblacion_solicitud');
    }
}
