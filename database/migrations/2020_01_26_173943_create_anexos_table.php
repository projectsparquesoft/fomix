<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateAnexosTable extends Migration
{

    public function up()
    {
        Schema::create('anexos', function (Blueprint $table) {
            $table->bigIncrements('id_anexo');

            $table->bigInteger('documento_id')->unsigned();
            $table->bigInteger('solicitud_id')->unsigned();

            $table->string('ruta')->nullable()->comment('ruta alojamiento de archivo');
            $table->tinyInteger('status')->comment('documentos validos');
            
            $table->foreign('solicitud_id')
                ->references('id_solicitud')
                ->on('solicitudes')
                ->onDelete('RESTRICT')
                ->onUpdate('CASCADE');

            $table->foreign('documento_id')
                ->references('id_documento')
                ->on('documentos')
                ->onDelete('RESTRICT')
                ->onUpdate('CASCADE');

            $table->timestamps();
        });
    }

    public function down()
    {
        Schema::dropIfExists('anexos');
    }
}
