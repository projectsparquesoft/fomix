<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Proponente extends Model
{
    protected $table = 'proponentes';

    protected $primaryKey = 'id_proponente';

    protected $fillable = [
       'nombre_proponente'
    ];

    protected $hidden = [
        'created_at', 'updated_at',
    ];


    public function empleados()
    {
        return $this->belongsToMany('App\Models\Empleado', 'empleado_dependencia', 'dependencia_id', 'empleado_id');
    }
}
