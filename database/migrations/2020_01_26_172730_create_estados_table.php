<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateEstadosTable extends Migration
{
    
    public function up()
    {
        Schema::create('estados', function (Blueprint $table) {
            $table->bigIncrements('id_estado');

            $table->string('nombre_estado', 150);
            
            $table->timestamps();
        });
    }

    
    public function down()
    {
        Schema::dropIfExists('estados');
    }
}
