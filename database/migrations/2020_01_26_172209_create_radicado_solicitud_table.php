<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateRadicadoSolicitudTable extends Migration
{

    public function up()
    {
        Schema::create('radicado_solicitud', function (Blueprint $table) {
            $table->bigIncrements('id_radicado_solicitud');

            $table->bigInteger('radicado_id')->unsigned();
            $table->bigInteger('solicitud_id')->unsigned();

            $table->tinyInteger('status')->comment('radicados no utilizados');
            $table->text('descripcion')->nullable()->comment('radicados de entrada y salida u otros.');

            $table->foreign('radicado_id')
                ->references('id_radicado')
                ->on('radicados')
                ->onDelete('RESTRICT')
                ->onUpdate('CASCADE');

            $table->foreign('solicitud_id')
                ->references('id_solicitud')
                ->on('solicitudes')
                ->onDelete('RESTRICT')
                ->onUpdate('CASCADE');

            $table->timestamps();
        });
    }

    public function down()
    {
        Schema::dropIfExists('radicado_solicitud');
    }
}
