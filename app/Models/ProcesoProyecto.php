<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class ProcesoProyecto extends Model
{
    protected $table = 'proceso_proyecto';

    protected $primaryKey = 'id_proceso_proyecto';

    protected $fillable = [
       'proceso_id', 'proyecto_id', 'status', 'descripcion'
    ];

    protected $hidden = [
        'created_at', 'updated_at',
    ];


    public function proceso()
    {
        return $this->belongsTo('App\Models\Proceso', 'proceso_id');
    }

    public function proyecto()
    {
        return $this->belongsTo('App\Models\Proyecto', 'proyecto_id');
    }
}
