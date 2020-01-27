<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Empleado extends Model
{
    protected $table = 'empleados';

    protected $primaryKey = 'id_empleado';

    protected $fillable = [
        'nid', 'nombre', 'apellido', 'email', 'celular', 'is_jefe'
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
