<?php

use Illuminate\Database\Seeder;
use App\Models\Proponente;

class ProponenteTableSeeder extends Seeder
{

    public function run()
    {
        Proponente::create([
            'nombre_proponente' => 'Organización privada sin ánimo de lucro.',
        ]);

        Proponente::create([
            'nombre_proponente' => 'Resguardo o cabildo indígena.',
        ]);

        Proponente::create([
            'nombre_proponente' => 'Consejos comunitarios de comunidades negras, afrocolombianas, palenqueras, raizales y pueblo ROM.',
        ]);

        Proponente::create([
            'nombre_proponente' => 'Entidad Publica.',
        ]);

        Proponente::create([
            'nombre_proponente' => 'Persona Natural.',
        ]);

        Proponente::create([
            'nombre_proponente' => 'Organización y/o Entidad Privada.',
        ]);
    }
}
