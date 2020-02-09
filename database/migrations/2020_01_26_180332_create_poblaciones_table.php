<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreatePoblacionesTable extends Migration
{

    public function up()
    {
        Schema::create('poblaciones', function (Blueprint $table) {
            $table->bigIncrements('id');

            $table->bigInteger('clasificacion_id')->unsigned();

            $table->integer('item');
            $table->text('detalle');

            $table->foreign('clasificacion_id')
                ->references('id')
                ->on('clasificaciones')
                ->onDelete('RESTRICT')
                ->onUpdate('CASCADE');

            $table->timestamps();
        });
    }

    public function down()
    {
        Schema::dropIfExists('poblaciones');
    }
}
