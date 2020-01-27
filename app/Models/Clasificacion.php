<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Clasificacion extends Model
{
    protected $table = 'clasificaciones';

    protected $primaryKey = 'id_clasificacion';

    protected $fillable = [
        'tipo_poblacion', 'status',
    ];

    protected $hidden = [
        'created_at', 'updated_at',
    ];

    public function poblaciones()
    {
        return $this->hasMany('App\Models\Poblacion', 'clasificacion_id');
    }
}
