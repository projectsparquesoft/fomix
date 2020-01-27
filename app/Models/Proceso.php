<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Proceso extends Model
{
    protected $table = 'procesos';

    protected $primaryKey = 'id_proceso';

    protected $fillable = [
       'nombre_proceso'
    ];

    protected $hidden = [
        'created_at', 'updated_at',
    ];


    public function proyectos()
    {
        return $this->belongsToMany('App\Models\Proyecto', 'proceso_proyecto',  'proceso_id', 'proyecto_id');
    }
}
