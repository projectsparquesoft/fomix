<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class IndicadorLinea extends Model
{
    protected $table = 'indicador_linea';

    protected $primaryKey = 'id_indicador_linea';

    protected $fillable = [
       'indicador_id', 'linea_id', 'status'
    ];

    protected $hidden = [
        'created_at', 'updated_at',
    ];


    public function indicador()
    {
        return $this->belongsTo('App\Models\Indicador', 'indicador_id');
    }
    public function linea()
    {
        return $this->belongsTo('App\Models\Linea', 'linea_id');
    }
}
