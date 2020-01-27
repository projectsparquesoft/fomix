<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Estado extends Model
{
    protected $table = 'estados';

    protected $primaryKey = 'id_estado';

    protected $fillable = [
       'nombre_estado'
    ];

    protected $hidden = [
        'created_at', 'updated_at',
    ];

    public function solicitudes()
    {
        return $this->belongsToMany('App\Models\Solicitud', 'historiales',  'estado_id', 'solicitud_id');
    }
}
