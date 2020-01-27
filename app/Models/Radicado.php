<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Radicado extends Model
{
    protected $table = 'radicados';

    protected $primaryKey = 'id_radicado';

    protected $fillable = [
       'codigo_radicado',
    ];

    protected $hidden = [
        'created_at', 'updated_at',
    ];


    public function empleados()
    {
        return $this->belongsToMany('App\Models\Empleado', 'empleado_dependencia', 'dependencia_id', 'empleado_id');
    }
}
