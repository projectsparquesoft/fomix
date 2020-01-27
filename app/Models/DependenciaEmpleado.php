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

    public function empleado()
    {
        return $this->belongsTo('App\Models\Empleado',  'empleado_id');
    }

    public function dependencia()
    {
        return $this->belongsTo('App\Models\Dependencia',  'dependencia_id');
    }

}
