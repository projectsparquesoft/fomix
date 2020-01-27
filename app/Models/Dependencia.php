<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Dependencia extends Model
{
    protected $table = 'dependencias';

    protected $primaryKey = 'id_dependencia';

    protected $fillable = [
       'nombre_dependencia', 'descripcion'
    ];

    protected $hidden = [
        'created_at', 'updated_at',
    ];


    public function empleados()
    {
        return $this->belongsToMany('App\Models\Empleado', 'empleado_dependencia', 'dependencia_id', 'empleado_id');
    }
}
