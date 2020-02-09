<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateSolicitantesTable extends Migration
{

    public function up()
    {
        Schema::create('solicitantes', function (Blueprint $table) {
            $table->bigIncrements('id');

            $table->bigInteger('municipio_id')->unsigned();
            $table->bigInteger('persona_id')->unsigned();
            $table->bigInteger('proponente_id')->unsigned();

            $table->bigInteger('nid')->unsigned()->unique();
            $table->string('nombre', 150);
            $table->string('apellido', 150);
            $table->string('razon_social', 255)->nullable()->comment('si tiene empresa / nombre natural');
            $table->string('email', 255);
            $table->text('direccion');
            $table->bigInteger('celular')->nullable();
            $table->string('representante_legal', 255);

            $table->foreign('municipio_id')
                ->references('id')
                ->on('municipios')
                ->onDelete('RESTRICT')
                ->onUpdate('CASCADE');

            $table->foreign('persona_id')
                ->references('id')
                ->on('personas')
                ->onDelete('RESTRICT')
                ->onUpdate('CASCADE');

            $table->foreign('proponente_id')
                ->references('id')
                ->on('proponentes')
                ->onDelete('RESTRICT')
                ->onUpdate('CASCADE');

            $table->softDeletes();
            $table->timestamps();
        });
    }

    public function down()
    {
        Schema::dropIfExists('solicitantes');
    }
}
