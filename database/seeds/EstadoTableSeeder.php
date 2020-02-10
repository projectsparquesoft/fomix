<?php

use App\Models\Estado;
use Illuminate\Database\Seeder;

class EstadoTableSeeder extends Seeder
{
   
    public function run()
    {
        Estado::create([
            'nombre_estado'=> 'Recepcion Entrada',
            'status' => 1,
        ]);

        Estado::create([
            'nombre_estado'=> 'Verificacion Gerencia',
            'status' => 1,
        ]);

        Estado::create([
            'nombre_estado'=> 'Verificacion Asistente',
            'status' => 1,
        ]);

        Estado::create([
            'nombre_estado'=> 'Recepcion Juridica',
            'status' => 1,
        ]);

        Estado::create([
            'nombre_estado'=> 'Recepcion Salida',
            'status' => 1,
        ]);

        Estado::create([
            'nombre_estado'=> 'Archivado',
            'status' => 1,
        ]);

        Estado::create([
            'nombre_estado'=> 'Aprobado Parcial',
            'status' => 1,
        ]);

        Estado::create([
            'nombre_estado'=> 'Aprobado Total',
            'status' => 1,
        ]);

        Estado::create([
            'nombre_estado'=> 'Rechazado',
            'status' => 1,
        ]);
    }
}
