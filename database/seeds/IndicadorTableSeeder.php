<?php

use App\Models\Eje;
use App\Models\Indicador;
use Illuminate\Database\Seeder;

class IndicadorTableSeeder extends Seeder
{

    public function run()
    {
        $eje = new Eje();
        $eje->nombre_eje = 'Eje Num 1.';
        $eje->nombre_programa = 'Cultura, Patrimonio e Identidad Sucreña';
        $eje->save();

        Indicador::create([
            'eje_id' => $eje->id,
            'nombre_indicador' => 'Número de procesos de emprendimiento cultural apoyados.',
            'meta' => 20,
            'status' => 1,
        ]);

        Indicador::create([
            'eje_id' => $eje->id,
            'nombre_indicador' => 'Número de bibliotecarios formados en uso y apropiación de TIC.',
            'meta' => 27,
            'status' => 1,
        ]);

        Indicador::create([
            'eje_id' => $eje->id,
            'nombre_indicador' => 'Número de bibliotecas públicas municipales dotadas.',
            'meta' => 30,
            'status' => 1,
        ]);

        Indicador::create([
            'eje_id' => $eje->id,
            'nombre_indicador' => 'Número de programas implementados para aumentar el índice de lectura.',
            'meta' => 16,
            'status' => 1,
        ]);

        Indicador::create([
            'eje_id' => $eje->id,
            'nombre_indicador' => 'Número de procesos de formación artística y cultural dotados.',
            'meta' => 16,
            'status' => 1,
        ]);

        Indicador::create([
            'eje_id' => $eje->id,
            'nombre_indicador' => 'Número de niños y jóvenes en procesos de formación artística a través de las casas de cultura municipales.',
            'meta' => 2000,
            'status' => 1,
        ]);

        Indicador::create([
            'eje_id' => $eje->id,
            'nombre_indicador' => 'Número de instructores artísticos formados y actualizados mediante contenidos pedagógicos.',
            'meta' => 40,
            'status' => 1,
        ]);

       
        Indicador::create([
            'eje_id' => $eje->id,
            'nombre_indicador' => 'Número de proyectos y ‘evéntica’ del sector cultural apoyados.',
            'meta' => 300,
            'status' => 1,
        ]);

        Indicador::create([
            'eje_id' => $eje->id,
            'nombre_indicador' => 'Número de procesos culturales de fortalecimiento institucional del sector.',
            'meta' => 40,
            'status' => 1,
        ]);

        Indicador::create([
            'eje_id' => $eje->id,
            'nombre_indicador' => 'Centro Cultural del Departamento construido y dotado.',
            'meta' => 1,
            'status' => 1,
        ]);

        Indicador::create([
            'eje_id' => $eje->id,
            'nombre_indicador' => 'Museo Arqueológico construido y dotado.',
            'meta' => 1,
            'status' => 1,
        ]);

        Indicador::create([
            'eje_id' => $eje->id,
            'nombre_indicador' => 'Número de Parques Temáticos de la Cultura construidos y dotados.',
            'meta' => 1,
            'status' => 1,
        ]);

      
        Indicador::create([
            'eje_id' => $eje->id,
            'nombre_indicador' => 'Número de proyectos de reconocimiento, valoración, gestión, inventario, registro, protección, salvaguarda, apropiación social, transmisión, difusión y/o documentación del patrimonio cultural ejecutados.',
            'meta' => 8,
            'status' => 1,
        ]);

        Indicador::create([
            'eje_id' => $eje->id,
            'nombre_indicador' => 'Número de procesos culturales con estrategia articulada para construcción de paz ejecutados.',
            'meta' => 2,
            'status' => 1,
        ]);

        Indicador::create([
            'eje_id' => $eje->id,
            'nombre_indicador' => 'Número de talleres pedagógicos para la elaboración de instrumentos musicales autóctonos implementados.',
            'meta' => 5,
            'status' => 1,
        ]);

        Indicador::create([
            'eje_id' => $eje->id,
            'nombre_indicador' => 'Producción artística de autores y artistas sucreños apoyados.',
            'meta' => 200,
            'status' => 1,
        ]);

        Indicador::create([
            'eje_id' => $eje->id,
            'nombre_indicador' => 'Número de artistas apoyados a través de la línea estímulos, investigación y circulación del arte.',
            'meta' => 510,
            'status' => 1,
        ]);

        Indicador::create([
            'eje_id' => $eje->id,
            'nombre_indicador' => 'Sector cinematográfico y audiovisual fortalecido, con dotación y capacitación.',
            'meta' => 1,
            'status' => 1,
        ]);

        Indicador::create([
            'eje_id' => $eje->id,
            'nombre_indicador' => 'Festival Cultural de Sucre apoyado.',
            'meta' => 4,
            'status' => 1,
        ]);

        Indicador::create([
            'eje_id' => $eje->id,
            'nombre_indicador' => 'Número de proyectos que fortalecen la identidad cultural de los grupos poblacionales vulnerables.',
            'meta' => 45,
            'status' => 1,
        ]);

        Indicador::create([
            'eje_id' => $eje->id,
            'nombre_indicador' => 'Número de procesos de comunicación de la cultura y el arte.',
            'meta' => 16,
            'status' => 1,
        ]);

    }

}
