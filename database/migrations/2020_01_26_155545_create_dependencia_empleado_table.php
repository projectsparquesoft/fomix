<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateDependenciaEmpleadoTable extends Migration
{

    public function up()
    {
        Schema::create('dependencia_empleado', function (Blueprint $table) {
            $table->bigIncrements('id_dependencia_empleado');

            $table->bigInteger('empleado_id')->unsigned();
            $table->bigInteger('dependencia_id')->unsigned();

            $table->date('fecha_salida')->nullable()->comment('cambio de dependencia o salida');
            $table->tinyInteger('status')->comment('dependencia actual donde trabaja');
            $table->text('motivo')->nullable()->comment('motivo de cambio');

            $table->foreign('empleado_id')
                ->references('id')
                ->on('empleados')
                ->onDelete('RESTRICT')
                ->onUpdate('CASCADE');

            $table->foreign('dependencia_id')
                ->references('id')
                ->on('dependencias')
                ->onDelete('RESTRICT')
                ->onUpdate('CASCADE');

            $table->softDeletes();
            $table->timestamps();
        });
    }

    public function down()
    {
        Schema::dropIfExists('dependencia_empleado');
    }
}
