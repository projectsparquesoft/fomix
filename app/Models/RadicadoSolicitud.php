<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class RadicadoSolicitud extends Model
{
    protected $table = 'radicado_solicitud';

    protected $primaryKey = 'id_radicado_solicitud';

    protected $fillable = [
       'radicado_id', 'solicitud_id', 'status', 'descripcion'
    ];

    protected $hidden = [
        'created_at', 'updated_at',
    ];


    public function empleados()
    {
        return $this->belongsToMany('App\Models\Empleado', 'empleado_dependencia', 'dependencia_id', 'empleado_id');
    }
}
