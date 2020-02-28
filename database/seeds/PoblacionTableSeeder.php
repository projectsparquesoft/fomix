<?php

use App\Models\Poblacion;
use App\Models\Clasificacion;
use Illuminate\Database\Seeder;

class PoblacionTableSeeder extends Seeder
{

    public function run()
    {
        
        Poblacion::create([
            'clasificacion_id' => Clasificacion::where('tipo_poblacion', 'Etaria (Edad)')
                ->first(['id'])
                ->id,
            'detalle' => '0 a 14 años',
        ]);

        Poblacion::create([
            'clasificacion_id' => Clasificacion::where('tipo_poblacion', 'Etaria (Edad)')
                ->first(['id'])
                ->id,
            'detalle' => '15 a 19 años',
        ]);

        Poblacion::create([
            'clasificacion_id' => Clasificacion::where('tipo_poblacion', 'Etaria (Edad)')
                ->first(['id'])
                ->id,
            'detalle' => '20 a 59 años',
        ]);

        Poblacion::create([
            'clasificacion_id' => Clasificacion::where('tipo_poblacion', 'Etaria (Edad)')
                ->first(['id'])
                ->id,
            'detalle' => 'Mayor de 60 años',
        ]);

        Poblacion::create([
            'clasificacion_id' => Clasificacion::where('tipo_poblacion', 'Grupos étnicos')
                ->first(['id'])
                ->id,
            'detalle' => 'Población Indígena',
        ]);

        Poblacion::create([
            'clasificacion_id' => Clasificacion::where('tipo_poblacion', 'Grupos étnicos')
                ->first(['id'])
                ->id,
            'detalle' => 'Población Afrocolombiana',
        ]);

        Poblacion::create([
            'clasificacion_id' => Clasificacion::where('tipo_poblacion', 'Grupos étnicos')
                ->first(['id'])
                ->id,
            'detalle' => 'Población Raizal',
        ]);

        Poblacion::create([
            'clasificacion_id' => Clasificacion::where('tipo_poblacion', 'Grupos étnicos')
                ->first(['id'])
                ->id,
            'detalle' => 'Pueblo Rom',
        ]);

        Poblacion::create([
            'clasificacion_id' => Clasificacion::where('tipo_poblacion', 'Grupos étnicos')
                ->first(['id'])
                ->id,
            'detalle' => 'Población Mestiza',
        ]);

        Poblacion::create([
            'clasificacion_id' => Clasificacion::where('tipo_poblacion', 'Grupos étnicos')
                ->first(['id'])
                ->id,
            'detalle' => 'Población Palenquera',
        ]);

        Poblacion::create([
            'clasificacion_id' => Clasificacion::where('tipo_poblacion', 'Género')
                ->first(['id'])
                ->id,
            'detalle' => 'Masculino',
        ]);

        Poblacion::create([
            'clasificacion_id' => Clasificacion::where('tipo_poblacion', 'Género')
                ->first(['id'])
                ->id,
            'detalle' => 'Femenino',
        ]);

        Poblacion::create([
            'clasificacion_id' => Clasificacion::where('tipo_poblacion', 'Población Vulnerable')
                ->first(['id'])
                ->id,
            'detalle' => 'Desplazados',
        ]);

        Poblacion::create([
            'clasificacion_id' => Clasificacion::where('tipo_poblacion', 'Población Vulnerable')
                ->first(['id'])
                ->id,
            'detalle' => 'Discapacitados',
        ]);

        Poblacion::create([
            'clasificacion_id' => Clasificacion::where('tipo_poblacion', 'Población Vulnerable')
                ->first(['id'])
                ->id,
            'detalle' => 'Víctimas',
        ]);
    }
}
