<?php

use Illuminate\Database\Seeder;

class DatabaseSeeder extends Seeder
{

    public function run()
    {
        /* 
        $this->call(UserTableSeeder::class);
        $this->call(DepartamentoTableSeeder::class);
        */
        
        $this->call(CategoriaTableSeeder::class);
        $this->call(ClasificacionTableSeeder::class);
        $this->call(DocumentoTableSeeder::class);
        $this->call(EstadoTableSeeder::class);
        $this->call(LineaTableSeeder::class);
        $this->call(IndicadorTableSeeder::class);
        $this->call(PersonaTableSeeder::class);
        $this->call(PoblacionTableSeeder::class);
        $this->call(ProcesoTableSeeder::class);
        $this->call(ProponenteTableSeeder::class);
        $this->call(FuenteTableSeeder::class);
        
    }
}
