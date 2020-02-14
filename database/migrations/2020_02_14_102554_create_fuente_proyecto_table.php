<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateFuenteProyectoTable extends Migration
{

    public function up()
    {
        Schema::create('fuente_proyecto', function (Blueprint $table) {
            
            $table->bigIncrements('id');

            $table->bigInteger('fuente_id')->unsigned();
            $table->bigInteger('proyecto_id')->unsigned();

            $table->foreign('proyecto_id')
                ->references('id')
                ->on('proyectos')
                ->onDelete('RESTRICT')
                ->onUpdate('CASCADE');

            $table->foreign('fuente_id')
                ->references('id')
                ->on('fuentes')
                ->onDelete('RESTRICT')
                ->onUpdate('CASCADE');

            $table->timestamps();
        });
    }

    public function down()
    {
        Schema::dropIfExists('fuente_proyecto');
    }
}
