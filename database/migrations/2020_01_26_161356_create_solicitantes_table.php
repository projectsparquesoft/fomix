<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateSolicitantesTable extends Migration
{

    public function up()
    {
        Schema::create('solicitantes', function (Blueprint $table) {
            $table->bigIncrements('id_solicitante');

            $table->bigInteger('municipio_id')->unsigned();
            $table->bigInteger('persona_id')->unsigned();
            $table->bigInteger('proponente_id')->unsigned();

            $table->bigInteger('nid')->unsigned()->unique();
            $table->string('nombre', 150);
            $table->string('apellido', 150);
            $table->string('razon_social', 255)->nullable()->comment('si tiene empresa');
            $table->string('email', 255);
            $table->text('direccion');
            $table->bigInteger('celular');
            $table->bigInteger('telefono');
            $table->string('representante_legal', 255);

            $table->foreign('municipio_id')
                ->references('id_municipio')
                ->on('municipios')
                ->onDelete('RESTRICT')
                ->onUpdate('CASCADE');

            $table->foreign('persona_id')
                ->references('id_persona')
                ->on('personas')
                ->onDelete('RESTRICT')
                ->onUpdate('CASCADE');

            $table->foreign('proponente_id')
                ->references('id_proponente')
                ->on('proponentes')
                ->onDelete('RESTRICT')
                ->onUpdate('CASCADE');

            $table->timestamps();
        });
    }

    public function down()
    {
        Schema::dropIfExists('solicitantes');
    }
}
