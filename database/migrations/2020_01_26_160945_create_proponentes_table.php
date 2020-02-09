<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateProponentesTable extends Migration
{

    public function up()
    {
        Schema::create('proponentes', function (Blueprint $table) {
            $table->bigIncrements('id');

            $table->string('nombre_proponente', 255);

            $table->timestamps();
        });
    }

    public function down()
    {
        Schema::dropIfExists('proponentes');
    }
}
