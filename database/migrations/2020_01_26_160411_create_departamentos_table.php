<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateDepartamentosTable extends Migration
{

    public function up()
    {
        Schema::create('departamentos', function (Blueprint $table) {
            $table->bigIncrements('id');

            $table->string('nombre_departamento', 150);

            $table->timestamps();
        });
    }

    public function down()
    {
        Schema::dropIfExists('departamentos');
    }
}
