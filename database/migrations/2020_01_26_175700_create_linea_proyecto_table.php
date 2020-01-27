<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateLineaProyectoTable extends Migration
{

    public function up()
    {
        Schema::create('linea_proyecto', function (Blueprint $table) {
            $table->bigIncrements('id_linea_proyecto');

            $table->bigInteger('proyecto_id')->unsigned();
            $table->bigInteger('linea_id')->unsigned();

            $table->tinyInteger('status')->comment('Vigente/No Vigente');

            $table->foreign('proyecto_id')
                ->references('id_proyecto')
                ->on('proyectos')
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
        Schema::dropIfExists('linea_proyecto');
    }
}
