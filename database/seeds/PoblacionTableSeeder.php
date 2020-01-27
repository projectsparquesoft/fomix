<?php

use App\Models\Poblacion;
use App\Models\Clasificacion;
use Illuminate\Database\Seeder;

class PoblacionTableSeeder extends Seeder
{

    public function run()
    {
        
        Poblacion::create([
            'item' => 1,
            'clasificacion_id' => Clasificacion::where('tipo_poblacion', 'Etaria (Edad)')
                ->first(['id_clasificacion'])
                ->id_clasificacion,
            'detalle' => '0 a 14 años',
        ]);

        Poblacion::create([
            'item' => 2,
            'clasificacion_id' => Clasificacion::where('tipo_poblacion', 'Etaria (Edad)')
                ->first(['id_clasificacion'])
                ->id_clasificacion,
            'detalle' => '15 a 19 años',
        ]);

        Poblacion::create([
            'item' => 3,
            'clasificacion_id' => Clasificacion::where('tipo_poblacion', 'Etaria (Edad)')
                ->first(['id_clasificacion'])
                ->id_clasificacion,
            'detalle' => '20 a 59 años',
        ]);

        Poblacion::create([
            'item' => 4,
            'clasificacion_id' => Clasificacion::where('tipo_poblacion', 'Etaria (Edad)')
                ->first(['id_clasificacion'])
                ->id_clasificacion,
            'detalle' => 'Mayor de 60 años',
        ]);

        Poblacion::create([
            'item' => 5,
            'clasificacion_id' => Clasificacion::where('tipo_poblacion', 'Grupos étnicos')
                ->first(['id_clasificacion'])
                ->id_clasificacion,
            'detalle' => 'Población Indígena',
        ]);

        Poblacion::create([
            'item' => 6,
            'clasificacion_id' => Clasificacion::where('tipo_poblacion', 'Grupos étnicos')
                ->first(['id_clasificacion'])
                ->id_clasificacion,
            'detalle' => 'Población Afrocolombiana',
        ]);

        Poblacion::create([
            'item' => 7,
            'clasificacion_id' => Clasificacion::where('tipo_poblacion', 'Grupos étnicos')
                ->first(['id_clasificacion'])
                ->id_clasificacion,
            'detalle' => 'Población Raizal',
        ]);

        Poblacion::create([
            'item' => 8,
            'clasificacion_id' => Clasificacion::where('tipo_poblacion', 'Grupos étnicos')
                ->first(['id_clasificacion'])
                ->id_clasificacion,
            'detalle' => 'Pueblo Rom',
        ]);

        Poblacion::create([
            'item' => 9,
            'clasificacion_id' => Clasificacion::where('tipo_poblacion', 'Grupos étnicos')
                ->first(['id_clasificacion'])
                ->id_clasificacion,
            'detalle' => 'Población Mestiza',
        ]);

        Poblacion::create([
            'item' => 10,
            'clasificacion_id' => Clasificacion::where('tipo_poblacion', 'Grupos étnicos')
                ->first(['id_clasificacion'])
                ->id_clasificacion,
            'detalle' => 'Población Palenquera',
        ]);

        Poblacion::create([
            'item' => 11,
            'clasificacion_id' => Clasificacion::where('tipo_poblacion', 'Género')
                ->first(['id_clasificacion'])
                ->id_clasificacion,
            'detalle' => 'Masculino',
        ]);

        Poblacion::create([
            'item' => 12,
            'clasificacion_id' => Clasificacion::where('tipo_poblacion', 'Género')
                ->first(['id_clasificacion'])
                ->id_clasificacion,
            'detalle' => 'Femenino',
        ]);

        Poblacion::create([
            'item' => 13,
            'clasificacion_id' => Clasificacion::where('tipo_poblacion', 'Población Vulnerable')
                ->first(['id_clasificacion'])
                ->id_clasificacion,
            'detalle' => 'Desplazados',
        ]);

        Poblacion::create([
            'item' => 14,
            'clasificacion_id' => Clasificacion::where('tipo_poblacion', 'Población Vulnerable')
                ->first(['id_clasificacion'])
                ->id_clasificacion,
            'detalle' => 'Discapacitados',
        ]);

        Poblacion::create([
            'item' => 15,
            'clasificacion_id' => Clasificacion::where('tipo_poblacion', 'Población Vulnerable')
                ->first(['id_clasificacion'])
                ->id_clasificacion,
            'detalle' => 'Víctimas',
        ]);
    }
}
