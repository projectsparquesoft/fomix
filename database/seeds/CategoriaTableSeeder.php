<?php

use App\Models\Categoria;
use Illuminate\Database\Seeder;

class CategoriaTableSeeder extends Seeder
{

    public function run()
    {
        Categoria::create([
            'tipo_solicitud' => 'Proyecto',
        ]);

        Categoria::create([
            'tipo_solicitud' => 'De Especie',
        ]);

        Categoria::create([
            'tipo_solicitud' => 'Apoyo Economico',
        ]);

        Categoria::create([
            'tipo_solicitud' => 'Normal',
        ]);
    }
}
