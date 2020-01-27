<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Proyecto extends Model
{
    protected $table = 'proyectos';

    protected $primaryKey = 'id_proyecto';

    protected $fillable = [
       'solicitud_id', 'descripcion', 'antecedente', 'justificacion', 'metodologia', 'objetivo_general', 'objetivo_especifico', 'metas'
    ];

    protected $hidden = [
        'created_at', 'updated_at',
    ];


    public function empleados()
    {
        return $this->belongsToMany('App\Models\Empleado', 'empleado_dependencia', 'dependencia_id', 'empleado_id');
    }
}
