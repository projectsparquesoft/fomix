<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class PoblacionProyecto extends Model
{
    protected $table = 'poblacion_proyecto';

    protected $primaryKey = 'id_poblacion_proyecto';

    protected $fillable = [
       'poblacion_id', 'proyecto_id', 'numero_persona', 'fuente_verificacion'
    ];

    protected $hidden = [
        'created_at', 'updated_at',
    ];


    public function poblacion()
    {
        return $this->belongsTo('App\Models\Poblacion', 'poblacion_id');
    }
    public function proyecto()
    {
        return $this->belongsTo('App\Models\Proyecto', 'proyecto_id');
    }
}
