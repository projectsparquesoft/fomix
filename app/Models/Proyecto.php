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

    public function solicitud()
    {
        return $this->belongsTo('App\Models\Solicitud', 'solicitud_id');
    }
    public function lineas()
    {
        return $this->belongsToMany('App\Models\Lineas', 'linea_proyecto', 'proyecto_id', 'linea_id');
    }
    public function procesos()
    {
        return $this->belongsToMany('App\Models\Proceso', 'proceso_proyecto', 'proyecto_id', 'proceso_id');
    }
    public function poblaciones()
    {
        return $this->belongsToMany('App\Models\Poblacion', 'poblacion_proyecto', 'proyecto_id', 'poblacion_id');
    }
    public function presupuestos()
    {
        return $this->hasMany('App\Models\Presupuesto', 'proyecto_id');
    }
    public function actividades()
    {
        return $this->hasMany('App\Models\Actividad', 'proyecto_id');
    }
}
