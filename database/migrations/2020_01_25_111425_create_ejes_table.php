<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateEjesTable extends Migration
{

    public function up()
    {
        Schema::create('ejes', function (Blueprint $table) {
            $table->bigIncrements('id');
            $table->string('nombre_eje', 255);
            $table->string('nombre_programa', 255);
            $table->timestamps();
        });
    }

    public function down()
    {
        Schema::dropIfExists('ejes');
    }
}
