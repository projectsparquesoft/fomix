<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class LineaProyecto extends Model
{
    protected $table = 'linea_proyecto';

    protected $primaryKey = 'id_linea_proyecto';

    protected $fillable = [
       'proyecto_id', 'linea_id', 'status'
    ];

    protected $hidden = [
        'created_at', 'updated_at',
    ];


    public function proyecto()
    {
        return $this->belongsTo('App\Models\Proyecto', 'proyecto_id');
    }
    public function linea()
    {
        return $this->belongsTo('App\Models\Linea', 'linea_id');
    }
}
