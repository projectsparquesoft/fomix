<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Poblacion extends Model
{
    protected $table = 'poblaciones';

    protected $primaryKey = 'id_poblacion';

    protected $fillable = [
       'item', 'clasificacion_id', 'detalle'
    ];

    protected $hidden = [
        'created_at', 'updated_at',
    ];

    public function proyectos()
    {
        return $this->belongsToMany('App\Models\Proyecto', 'poblacion_proyecto', 'poblacion_id','proyecto_id');
    }
}
