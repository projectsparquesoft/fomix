<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateSolicitudesTable extends Migration
{

    public function up()
    {
        Schema::create('solicitudes', function (Blueprint $table) {
            $table->bigIncrements('id');

            $table->bigInteger('categoria_id')->unsigned();
            $table->bigInteger('solicitante_id')->unsigned();
            $table->bigInteger('valor')->nullable()->comment('Valor total si es de proyecto o apoyo economico');
            $table->tinyInteger('status');
            $table->text('descripcion')->nullable();

            $table->string('archivo', 255)->nullable();

            $table->foreign('categoria_id')
                ->references('id')
                ->on('categorias')
                ->onDelete('RESTRICT')
                ->onUpdate('CASCADE');

            $table->foreign('solicitante_id')
                ->references('id')
                ->on('solicitantes')
                ->onDelete('RESTRICT')
                ->onUpdate('CASCADE');

            $table->softDeletes();
            $table->timestamps();

        });
    }

    public function down()
    {
        Schema::dropIfExists('solicitudes');
    }
}
