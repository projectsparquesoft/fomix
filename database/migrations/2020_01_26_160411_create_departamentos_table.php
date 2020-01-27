<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateDepartamentosTable extends Migration
{
    
    public function up()
    {
        Schema::create('departamentos', function (Blueprint $table) {
            $table->bigIncrements('id_departamento');

            $table->string('nombre_departamento', 150);
            
            $table->timestamps();
        });
    }

    
    public function down()
    {
        Schema::dropIfExists('departamentos');
    }
}
