<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreatePeriodosTable extends Migration
{

    public function up()
    {
        Schema::create('periodos', function (Blueprint $table) {
            $table->bigIncrements('id');

            $table->bigInteger('indicador_id')->unsigned();

            $table->date('fecha_inicio');
            $table->date('fecha_final');
            $table->integer('cantidad');

            $table->foreign('indicador_id')
            ->references('id')
            ->on('indicadores')
            ->onDelete('RESTRICT')
            ->onUpdate('CASCADE');

            $table->timestamps();
        });
    }

    public function down()
    {
        Schema::dropIfExists('periodos');
    }
}
