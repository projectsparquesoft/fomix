<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Poblacion extends Model
{
    protected $table = 'poblaciones';

    protected $primaryKey = 'id_poblacion';

    protected $fillable = [
       'item', 'clasificacion', 'detalle'
    ];

    protected $hidden = [
        'created_at', 'updated_at',
    ];


    public function falta()
    {
        return $this->belongsToMany('App\Models\Empleado', 'empleado_dependencia', 'dependencia_id', 'empleado_id');
    }
}
