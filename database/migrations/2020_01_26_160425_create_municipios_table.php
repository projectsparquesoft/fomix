<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateMunicipiosTable extends Migration
{

    public function up()
    {
        Schema::create('municipios', function (Blueprint $table) {

            $table->bigIncrements('id');

            $table->bigInteger('departamento_id')->unsigned();

            $table->string('nombre_municipio', 150);

            $table->foreign('departamento_id')
                ->references('id')
                ->on('departamentos')
                ->onDelete('RESTRICT')
                ->onUpdate('CASCADE');

            $table->timestamps();
        });
    }

    public function down()
    {
        Schema::dropIfExists('municipios');
    }
}
