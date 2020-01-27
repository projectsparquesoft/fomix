<?php

use App\Models\Proceso;
use Illuminate\Database\Seeder;

class ProcesoTableSeeder extends Seeder
{

    public function run()
    {
        Proceso::create([
            'nombre_proceso' => 'Aprobado',
        ]);

        Proceso::create([
            'nombre_proceso' => 'Rechazado',
        ]);

        Proceso::create([
            'nombre_proceso' => 'Validado',
        ]);

        Proceso::create([
            'nombre_proceso' => 'Financiado',
        ]);
        
        Proceso::create([
            'nombre_proceso' => 'En Curso',
        ]);

        Proceso::create([
            'nombre_proceso' => 'Finalizado',
        ]);
        
        


    }
}
