<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreatePoblacionesTable extends Migration
{
    
    public function up()
    {
        Schema::create('poblaciones', function (Blueprint $table) {
            $table->bigIncrements('id_poblacion');

            $table->integer('item');
            $table->string('clasificacion', 150);
            $table->text('detalle');

            $table->timestamps();
        });
    }

    
    public function down()
    {
        Schema::dropIfExists('poblaciones');
    }
}
