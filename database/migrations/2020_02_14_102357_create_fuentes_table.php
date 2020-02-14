<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateFuentesTable extends Migration
{
   
    public function up()
    {
        Schema::create('fuentes', function (Blueprint $table) {
            $table->bigIncrements('id');
            $table->string('fuente_verificacion',255);
            $table->timestamps();
        });
    }

    
    public function down()
    {
        Schema::dropIfExists('fuentes');
    }
}
