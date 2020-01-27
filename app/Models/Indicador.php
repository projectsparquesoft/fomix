<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Indicador extends Model
{
    protected $table = 'indicadores';

    protected $primaryKey = 'id_indicador';

    protected $fillable = [
       'nombre_indicador', 'orden_indicador', 'status'
    ];

    protected $hidden = [
        'created_at', 'updated_at',
    ];


    public function lineas()
    {
        return $this->belongsToMany('App\Models\Linea', 'indicador_linea', 'indicador_id','linea_id');
    }

}
