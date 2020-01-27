<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Historial extends Model
{
    protected $table = 'historiales';

    protected $primaryKey = 'id_historial';

    protected $fillable = [
       'user_id', 'solicitud_id', 'estado_id', 'descripcion'
    ];

    protected $hidden = [
        'created_at', 'updated_at',
    ];


    public function solicitud()
    {
        return $this->belongsTo('App\Models\Solicitud', 'solicitud_id');
    }
}
