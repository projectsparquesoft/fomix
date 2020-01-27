<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateClasificacionesTable extends Migration
{

    public function up()
    {
        Schema::create('clasificaciones', function (Blueprint $table) {
            $table->bigIncrements('id_clasificacion');

            $table->string('tipo_poblacion');

            $table->tinyInteger('status');

            $table->timestamps();
        });
    }

    public function down()
    {
        Schema::dropIfExists('clasificaciones');
    }
}
