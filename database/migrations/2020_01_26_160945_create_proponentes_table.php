<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateProponentesTable extends Migration
{
    
    public function up()
    {
        Schema::create('proponentes', function (Blueprint $table) {
            $table->bigIncrements('id_proponente');

            $table->string('nombre_proponente', 255);

            $table->timestamps();
        });
    }

    
    public function down()
    {
        Schema::dropIfExists('proponentes');
    }
}
