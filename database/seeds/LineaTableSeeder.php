<?php

use Illuminate\Database\Seeder;
use App\Models\Linea;

class LineaTableSeeder extends Seeder
{

    public function run()
    {
        Linea::create([
            'nombre_linea' => 'Linea 1',
            'descripcion' => 'Proyectos en formación y promoción de lectura, escritura y narrativa.',
            'status' => 1,
        ]);

        Linea::create([
            'nombre_linea' => 'Linea 2',
            'descripcion' => 'Actividades artísticas y culturales de duración limitada (Festivales, Feria, Carnavales, Fiestas tradicionales, Conciertos, Recitales, Encuentros Culturales o Académico).',
            'status' => 1,
        ]);

        Linea::create([
            'nombre_linea' => 'Linea 3',
            'descripcion' => 'Fortalecimientos de espacios artísticos y Culturales ( proyectos de Investigación, Difusión, Creación y Estudios).',
            'status' => 1,
        ]);

        Linea::create([
            'nombre_linea' => 'Linea 4',
            'descripcion' => 'Proyectos de formación artística y Cultural (Procesos en Danza, Música, Teatro, Circo, Literatura, Artes Plásticas, o Visuales, Audiovisuales, y Cinematografía, Producción y Creación de Contenidos Culturales, Periodismo Cultural.',
            'status' => 1,
        ]);

        Linea::create([
            'nombre_linea' => 'Linea 5',
            'descripcion' => 'Emprendimiento Cultural (proyectos productivos en artesanías, diseño, artes visuales, cocinas tradicionales).',
            'status' => 1,
        ]);

        Linea::create([
            'nombre_linea' => 'Linea 6',
            'descripcion' => 'Circulación artistas (Presentaciones, giras por invitación, intercambios).',
            'status' => 1,
        ]);

        Linea::create([
            'nombre_linea' => 'Linea 7',
            'descripcion' => 'Fortalecimiento cultural a poblaciones específicas (Pueblo Indígena, Comunidades negras. Afrocolombianas, Comunidades raizales, Comunidades palenqueras, Pueblo ROM.',
            'status' => 1,
        ]);

        Linea::create([
            'nombre_linea' => 'Linea 8',
            'descripcion' => 'Igualdad de oportunidades culturales para las personas con discapacidad (Proyectos encaminados en inclusión social y participación de las personas con discapacidad a través de proyectos artísticos y culturales).',
            'status' => 1,
        ]);
    }
}
