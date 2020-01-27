<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateDocumentosTable extends Migration
{

    public function up()
    {
        Schema::create('documentos', function (Blueprint $table) {
            $table->bigIncrements('id_documento');

            $table->string('tipo_documento', 100);

            $table->tinyInteger('categoria')->comment('1:Juridico, 2:Natural, 3:Mixto');

            $table->timestamps();
        });
    }

    public function down()
    {
        Schema::dropIfExists('documentos');
    }
}
