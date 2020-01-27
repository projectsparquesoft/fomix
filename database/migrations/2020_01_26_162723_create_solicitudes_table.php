<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateSolicitudesTable extends Migration
{

    public function up()
    {
        Schema::create('solicitudes', function (Blueprint $table) {
            $table->bigIncrements('id_solicitud');

            $table->bigInteger('categoria_id')->unsigned();
            $table->bigInteger('solicitante_id')->unsigned();

            $table->string('archivo', 255);

            $table->foreign('categoria_id')
                ->references('id_categoria')
                ->on('categorias')
                ->onDelete('RESTRICT')
                ->onUpdate('CASCADE');

            $table->foreign('solicitante_id')
                ->references('id_solicitante')
                ->on('solicitantes')
                ->onDelete('RESTRICT')
                ->onUpdate('CASCADE');

            $table->timestamps();
        });
    }

    public function down()
    {
        Schema::dropIfExists('solicitudes');
    }
}
