<?php

use App\Models\Persona;
use Illuminate\Database\Seeder;

class PersonaTableSeeder extends Seeder
{

    public function run()
    {
        Persona::create([
            'tipo_persona' => 'Juridico',
        ]);

        Persona::create([
            'tipo_persona' => 'Natural',
        ]);
    }
}
