<?php

use App\Models\Proceso;
use Illuminate\Database\Seeder;

class ProcesoTableSeeder extends Seeder
{

    public function run()
    {
        Proceso::create([
            'nombre_proceso' => 'Aprobado',
            'status' => 1,
        ]);

        Proceso::create([
            'nombre_proceso' => 'Rechazado',
            'status' => 1,
        ]);

        Proceso::create([
            'nombre_proceso' => 'Validado',
            'status' => 1,
        ]);

        Proceso::create([
            'nombre_proceso' => 'Financiado',
            'status' => 1,
        ]);

        Proceso::create([
            'nombre_proceso' => 'En Curso',
            'status' => 1,
        ]);

        Proceso::create([
            'nombre_proceso' => 'Finalizado',
            'status' => 1,
        ]);

    }
}
