<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateActividadesTable extends Migration
{
    
    public function up()
    {
        Schema::create('actividades', function (Blueprint $table) {
            $table->bigIncrements('id_actividad');

            $table->bigInteger('proyecto_id')->unsigned();

            $table->text('nombre_actividad');
            $table->date('fecha_inicio');
            $table->date('fecha_final');

            $table->foreign('proyecto_id')
                ->references('id_proyecto')
                ->on('proyectos')
                ->onDelete('RESTRICT')
                ->onUpdate('CASCADE');

            
            $table->timestamps();
        });
    }

    
    public function down()
    {
        Schema::dropIfExists('actividades');
    }
}
