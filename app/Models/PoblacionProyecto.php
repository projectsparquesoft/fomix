<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class PoblacionProyecto extends Model
{
    protected $table = 'poblacion_proyecto';

    protected $primaryKey = 'id_poblacion_proyecto';

    protected $fillable = [
       'poblacion_id', 'proyecto_id', 'numero_persona', 'fuente_verificacion'
    ];

    protected $hidden = [
        'created_at', 'updated_at',
    ];


    public function falta()
    {
        return $this->belongsToMany('App\Models\Empleado', 'empleado_dependencia', 'dependencia_id', 'empleado_id');
    }
}
