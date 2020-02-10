<?php

use App\Models\Documento;
use Illuminate\Database\Seeder;

class DocumentoTableSeeder extends Seeder
{

    public function run()
    {
        Documento::create([
           'tipo_documento' => 'Fotocopia de Cedula Ciudadania Representante Legal.',
           'categoria' => 1,
        ]);

        Documento::create([
            'tipo_documento' => 'Fotocopia RUT actualizado Representante Legal.',
            'categoria' => 1,
         ]);

         Documento::create([
            'tipo_documento' => 'Certificado antecedentes Disciplinarios (Procuraduria) Representante Legal.',
            'categoria' => 1,
         ]);

         Documento::create([
            'tipo_documento' => 'Certificado antecedentes Fiscales (Contraloría) Representante Legal.',
            'categoria' => 1,
         ]);

         Documento::create([
            'tipo_documento' => 'Aportes y Constancia de salud (planilla - certificado fosyga).',
            'categoria' => 1,
         ]);

         Documento::create([
            'tipo_documento' => 'Cámara de Comercio actualizada.',
            'categoria' => 1,
         ]);

         Documento::create([
            'tipo_documento' => 'Certificado antecedentes Fiscales (Controloría) de la organización y/o entidad.',
            'categoria' => 1,
         ]);

         Documento::create([
            'tipo_documento' => 'Certificado antecedentes Disciplinarios (Procuraduria) de la organización y/o entidad.',
            'categoria' => 1,
         ]);

         Documento::create([
            'tipo_documento' => 'Certificado del Revisor Fiscal.',
            'categoria' => 1,
         ]);

         Documento::create([
            'tipo_documento' => 'Certificado junta central de contadores.',
            'categoria' => 2,
         ]);

         Documento::create([
            'tipo_documento' => 'Fotocopia de la cedula del revisor fiscal.',
            'categoria' => 2,
         ]);

         Documento::create([
            'tipo_documento' => 'Fotocopia de la tarjeta profesional del revisor fiscal.',
            'categoria' => 2,
         ]);

         Documento::create([
            'tipo_documento' => 'Carta presentación del proyecto.',
            'categoria' => 3,
         ]);

         Documento::create([
            'tipo_documento' => 'Fotocopia de la Cedula.',
            'categoria' => 3,
         ]);

         Documento::create([
            'tipo_documento' => 'Fotocopia del RUT actualizado.',
            'categoria' => 4,
         ]);

         Documento::create([
            'tipo_documento' => 'Certificado antecedentes Judiciales (Policía).',
            'categoria' => 3,
         ]);

         Documento::create([
            'tipo_documento' => 'Certificado antecedentes Disciplinarios (Procuraduría).',
            'categoria' => 3,
         ]);

         Documento::create([
            'tipo_documento' => 'Certificado antecedentes Disciplinarios (Contraloría).',
            'categoria' => 3,
         ]);

         Documento::create([
            'tipo_documento' => 'Constancia de salud (planilla - certificado fosyga).',
            'categoria' => 3,
         ]);



    }
}
