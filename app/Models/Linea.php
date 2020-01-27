<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Linea extends Model
{
    protected $table = 'lineas';

    protected $primaryKey = 'id_linea';

    protected $fillable = [
       'nombre_linea', 'orden_linea', 'status'
    ];

    protected $hidden = [
        'created_at', 'updated_at',
    ];


    public function indicadores()
    {
        return $this->belongsToMany('App\Models\Indicador', 'indicador_linea', 'linea_id', 'indicador_id')
        ->withTimestamps();
    }
}
