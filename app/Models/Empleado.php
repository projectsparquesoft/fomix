<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\SoftDeletes;

class Empleado extends Model
{
    use SoftDeletes;

    protected $table = 'empleados';

    protected $fillable = [
        'nid', 'nombre', 'apellido', 'email', 'celular', 'is_jefe',
    ];

    protected $hidden = [
        'created_at', 'updated_at',
    ];

    protected $dates = ['deleted_at'];

    public function user()
    {
        return $this->hasOne('App\User', 'empleado_id');
    }

    public function dependencias()
    {
        return $this->belongsToMany('App\Models\Dependencia', 'dependencia_empleado')->withTimestamps();
    }

}
