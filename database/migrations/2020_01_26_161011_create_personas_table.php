<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreatePersonasTable extends Migration
{
    
    public function up()
    {
        Schema::create('personas', function (Blueprint $table) {
            $table->bigIncrements('id_persona');

            $table->enum('tipo_persona', ['Juridico', 'Natural']);

            $table->timestamps();
        });
    }

    
    public function down()
    {
        Schema::dropIfExists('personas');
    }
}
