<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Solicitud extends Model
{
    protected $table = 'solicitudes';

    protected $primaryKey = 'id_solicitud';

    protected $fillable = [
        'categoria_id', 'solicitante_id', 'archivo'
    ];

    protected $hidden = [
        'created_at', 'updated_at',
    ];

    public function user()
    {
        return $this->hasOne('App\User', 'empleado_id');
    }

    public function dependencias()
    {
        return $this->belongsToMany('App\Models\Dependencia', 'empleado_dependencia', 'empleado_id', 'dependencia_id');
    }
}
