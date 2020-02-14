<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateProyectosTable extends Migration
{

    public function up()
    {
        Schema::create('proyectos', function (Blueprint $table) {
            $table->bigIncrements('id');

            $table->bigInteger('solicitud_id')->unsigned();

            $table->string('titulo', 255);
            $table->date('fecha_inicio');
            $table->date('fecha_final');
            $table->text('descripcion');
            $table->text('antecedentes')->nullable();
            $table->text('justificacion')->nullable();
            $table->text('metodologia')->nullable();
            $table->text('objetivo_general')->nullable();
            $table->text('objetivo_especifico')->nullable();
            $table->text('metas')->nullable();
            
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
        Schema::dropIfExists('proyectos');
    }
}
