<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class ProcesoProyecto extends Model
{
    protected $table = 'proceso_proyecto';

    protected $primaryKey = 'id_proceso_proyecto';

    protected $fillable = [
       'proceso_id', 'proyecto_id', 'status', 'descripcion'
    ];

    protected $hidden = [
        'created_at', 'updated_at',
    ];


    public function empleados()
    {
        return $this->belongsToMany('App\Models\Empleado', 'empleado_dependencia', 'dependencia_id', 'empleado_id');
    }
}
