<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateRadicadoSolicitudTable extends Migration
{

    public function up()
    {
        Schema::create('radicado_solicitud', function (Blueprint $table) {
            $table->bigIncrements('id');

            $table->bigInteger('radicado_id')->unsigned();
            $table->bigInteger('solicitud_id')->unsigned();

            $table->tinyInteger('status')->comment('radicados no utilizados');
            $table->text('descripcion')->nullable()->comment('radicados de entrada y salida u otros.');
            $table->enum('tipo_radicado', ['Entrada', 'Salida']);

            $table->foreign('radicado_id')
                ->references('id')
                ->on('radicados')
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
        Schema::dropIfExists('radicado_solicitud');
    }
}
