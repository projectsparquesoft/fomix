<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateIndicadoresTable extends Migration
{

    public function up()
    {
        Schema::create('indicadores', function (Blueprint $table) {
            $table->bigIncrements('id');

            $table->bigInteger('eje_id')->unsigned();

            $table->text('nombre_indicador');
            $table->integer('meta')->comment('cantidad que aspiran en los 4 años');
            $table->tinyInteger('status')->comment('vigente/No vigente');

            $table->foreign('eje_id')
            ->references('id')
            ->on('ejes')
            ->onDelete('RESTRICT')
            ->onUpdate('CASCADE');

            $table->timestamps();
        });
    }

    public function down()
    {
        Schema::dropIfExists('indicadores');
    }
}
