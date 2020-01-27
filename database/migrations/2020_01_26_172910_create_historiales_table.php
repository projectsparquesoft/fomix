<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateHistorialesTable extends Migration
{
    public function up()
    {
        Schema::create('historiales', function (Blueprint $table) {
            $table->bigIncrements('id_historial');

            $table->bigInteger('user_id')->unsigned();
            $table->bigInteger('solicitud_id')->unsigned();
            $table->bigInteger('estado_id')->unsigned();

            $table->text('descripcion')->nullable()->comment("motivo de cambio de estado");

            $table->foreign('user_id')
                ->references('id')
                ->on('users')
                ->onDelete('RESTRICT')
                ->onUpdate('CASCADE');

            $table->foreign('solicitud_id')
                ->references('id_solicitud')
                ->on('solicitudes')
                ->onDelete('RESTRICT')
                ->onUpdate('CASCADE');

            $table->foreign('estado_id')
                ->references('id_estado')
                ->on('estados')
                ->onDelete('RESTRICT')
                ->onUpdate('CASCADE');

            $table->timestamps();
        });
    }

    public function down()
    {
        Schema::dropIfExists('historiales');
    }
}
