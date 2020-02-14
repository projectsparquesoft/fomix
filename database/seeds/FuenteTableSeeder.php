<?php

use Illuminate\Database\Seeder;
use App\Models\Fuente;


class FuenteTableSeeder extends Seeder
{
    
    public function run()
    {
        Fuente::create([
            'nombre_estado'=> 'Recepcion Entrada',
            'status' => 1,
        ]);

    }
}
