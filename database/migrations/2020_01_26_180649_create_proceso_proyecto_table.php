<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateProcesoProyectoTable extends Migration
{

    public function up()
    {
        Schema::create('proceso_proyecto', function (Blueprint $table) {
            $table->bigIncrements('id');

            $table->bigInteger('proceso_id')->unsigned();
            $table->bigInteger('proyecto_id')->unsigned();

            $table->tinyInteger('status')->comment('Vigente/No Vigente');
            $table->text('descripcion')->comment('Descripcion del estado actual del proyecto');

            $table->foreign('proyecto_id')
                ->references('id')
                ->on('proyectos')
                ->onDelete('RESTRICT')
                ->onUpdate('CASCADE');

            $table->foreign('proceso_id')
                ->references('id')
                ->on('procesos')
                ->onDelete('RESTRICT')
                ->onUpdate('CASCADE');

            $table->timestamps();
        });
    }

    public function down()
    {
        Schema::dropIfExists('proceso_proyecto');
    }
}
