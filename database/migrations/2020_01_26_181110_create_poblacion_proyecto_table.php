<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreatePoblacionProyectoTable extends Migration
{

    public function up()
    {
        Schema::create('poblacion_proyecto', function (Blueprint $table) {
            $table->bigIncrements('id_poblacion_proyecto');

            $table->bigInteger('poblacion_id')->unsigned();
            $table->bigInteger('proyecto_id')->unsigned();

            $table->integer('numero_persona');
            $table->string('fuente_verificacion', 200);

            $table->foreign('proyecto_id')
                ->references('id_proyecto')
                ->on('proyectos')
                ->onDelete('RESTRICT')
                ->onUpdate('CASCADE');

            $table->foreign('poblacion_id')
                ->references('id_poblacion')
                ->on('poblaciones')
                ->onDelete('RESTRICT')
                ->onUpdate('CASCADE');

            $table->timestamps();
        });
    }

    public function down()
    {
        Schema::dropIfExists('poblacion_proyecto');
    }
}
