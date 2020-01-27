<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class DependenciaEmpleado extends Model
{
    protected $table = 'dependencia_empleado';

    protected $primaryKey = 'id_dependencia_empleado';

    protected $fillable = [
       'empleado_id', 'dependencia_id', 'fecha_salida', 'status', 'motivo'
    ];

    protected $hidden = [
        'created_at', 'updated_at',
    ];


    public function falta()
    {
        return $this->belongsToMany('App\Models\Empleado', 'empleado_dependencia', 'dependencia_id', 'empleado_id');
    }
}
