<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Solicitante extends Model
{
    protected $table = 'solicitantes';

    protected $primaryKey = 'id_solicitante';

    protected $fillable = [
       'municipio_id', 'persona_id', 'proponente_id', 'nid', 'nombre','apellido', 'razon_social', 'email', 'direccion', 'celular', 'telefono', 'representante_legal'
    ];

    protected $hidden = [
        'created_at', 'updated_at',
    ];


    public function falta()
    {
        return $this->belongsToMany('App\Models\Empleado', 'empleado_dependencia', 'dependencia_id', 'empleado_id');
    }
}
