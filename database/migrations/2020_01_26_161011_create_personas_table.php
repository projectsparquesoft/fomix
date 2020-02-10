<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreatePersonasTable extends Migration
{

    public function up()
    {
        Schema::create('personas', function (Blueprint $table) {
            $table->bigIncrements('id');

            $table->enum('tipo_persona', ['Juridico', 'Natural']);

            $table->timestamps();
        });
    }

    public function down()
    {
        Schema::dropIfExists('personas');
    }
}
