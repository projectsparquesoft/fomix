<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\SoftDeletes;

class Linea extends Model
{
    use SoftDeletes;

    protected $table = 'lineas';

    protected $fillable = [
        'nombre_linea', 'descripcion', 'orden_linea', 'status',
    ];

    protected $hidden = [
        'created_at', 'updated_at',
    ];

    protected $dates = ['deleted_at'];

    public function proyectos()
    {
        return $this->belongsToMany('App\Models\Proyecto', 'linea_proyecto');
    }

}
