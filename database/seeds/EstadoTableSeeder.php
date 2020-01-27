<?php

use App\Models\Estado;
use Illuminate\Database\Seeder;

class EstadoTableSeeder extends Seeder
{
   
    public function run()
    {
        Estado::create([
            'nombre_estado'=> 'Recepcion Entrada',
        ]);

        Estado::create([
            'nombre_estado'=> 'Verificacion Gerencia',
        ]);

        Estado::create([
            'nombre_estado'=> 'Verificacion Asistente',
        ]);

        Estado::create([
            'nombre_estado'=> 'Recepcion Juridica',
        ]);

        Estado::create([
            'nombre_estado'=> 'Recepcion Salida',
        ]);

        Estado::create([
            'nombre_estado'=> 'Archivado',
        ]);

        Estado::create([
            'nombre_estado'=> 'Aprobado',
        ]);

        Estado::create([
            'nombre_estado'=> 'Rechazado',
        ]);
    }
}
