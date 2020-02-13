<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreatePresupuestosTable extends Migration
{

    public function up()
    {
        Schema::create('presupuestos', function (Blueprint $table) {
            $table->bigIncrements('id');

            $table->bigInteger('proyecto_id')->unsigned();

            $table->integer('rubro');
            $table->integer('recurso_municipio');
            $table->integer('fondo_mixto');
            $table->integer('ministerio_cultura');
            $table->integer('ingreso_propio');

            $table->foreign('proyecto_id')
                ->references('id')
                ->on('solicitudes')
                ->onDelete('RESTRICT')
                ->onUpdate('CASCADE');

            $table->timestamps();
        });
    }

    public function down()
    {
        Schema::dropIfExists('presupuestos');
    }
}
