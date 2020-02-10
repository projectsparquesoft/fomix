<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Dependencia extends Model
{
    protected $table = 'dependencias';

    protected $fillable = [
        'nombre_dependencia', 'descripcion',
    ];

    protected $hidden = [
        'created_at', 'updated_at',
    ];

    public function empleados()
    {
        return $this->belongsToMany('App\Models\Empleado');
    }

    public function scopeSearch($query, $search)
    {
        return $query->where('nombre_dependencia', 'like', "%$search%")
            ->orWhere('descripcion', 'like', "%$search%");

    }
}
