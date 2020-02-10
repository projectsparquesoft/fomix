<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Proceso extends Model
{
    protected $table = 'procesos';

    protected $fillable = [
        'nombre_proceso', 'status',
    ];

    protected $hidden = [
        'created_at', 'updated_at',
    ];

    public function proyectos()
    {
        return $this->belongsToMany('App\Models\Proyecto');
    }
}
