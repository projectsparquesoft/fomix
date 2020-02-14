<?php

use Illuminate\Database\Seeder;
use App\Models\Fuente;


class FuenteTableSeeder extends Seeder
{
    
    public function run()
    {
        Fuente::create([
            'fuente_verificacion'=> 'Entrevistas Semiestructuradas Individuales y Grupales con Productores.',
        ]);

        Fuente::create([
            'fuente_verificacion'=> 'Informe de Monitoreo Externo Final del Proyecto.',
        ]);

        Fuente::create([
            'fuente_verificacion'=> 'Lista de asistencia.',
        ]);

        Fuente::create([
            'fuente_verificacion'=> 'Diarios de campo.',
        ]);

        Fuente::create([
            'fuente_verificacion'=> 'Fotografias/videos/Planillas.',
        ]);

    }
}
