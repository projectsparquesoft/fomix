<?php

use Illuminate\Database\Seeder;
use App\Models\Indicador;
use App\Models\Linea;

class IndicadorTableSeeder extends Seeder
{

    public function run()
    {
        $indicador = Indicador::create([
            'nombre_indicador' => 'Fondos Mixtos Departamentales o Distritales de Cultura',
            'orden_indicador' => 1,
            'status' => 1,
        ]);

        $indicador->lineas()->attach($this->arrayLinea(rand(1, 8)), ['status' => 1]);

    }

    public function arrayLinea($max)
    {
        $lineas = Linea::inRandomOrder()
            ->take($max)
            ->get()
            ->pluck('id_linea');

        return $lineas->toArray();
    }
}
