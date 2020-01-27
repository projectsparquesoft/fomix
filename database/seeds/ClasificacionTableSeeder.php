<?php

use App\Models\Clasificacion;
use Illuminate\Database\Seeder;

class ClasificacionTableSeeder extends Seeder
{

    public function run()
    {
        Clasificacion::create([
            'tipo_poblacion' => 'Etaria (Edad)',
            'status' => 1,
        ]);

        Clasificacion::create([
            'tipo_poblacion' => 'Grupos étnicos',
            'status' => 1,
        ]);

        Clasificacion::create([
            'tipo_poblacion' => 'Género',
            'status' => 1,
        ]);

        Clasificacion::create([
            'tipo_poblacion' => 'Población Vulnerable',
            'status' => 1,
        ]);
    }
}
