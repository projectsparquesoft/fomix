<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateProyectosTable extends Migration
{

    public function up()
    {
        Schema::create('proyectos', function (Blueprint $table) {
            $table->bigIncrements('id_proyecto');

            $table->bigInteger('solicitud_id')->unsigned();

            $table->text('descripcion');
            $table->text('antecedente');
            $table->text('justificacion');
            $table->text('metodologia');
            $table->text('objetivo_general');
            $table->text('objetivo_especifico');
            $table->text('metas');

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
        Schema::dropIfExists('proyectos');
    }
}
