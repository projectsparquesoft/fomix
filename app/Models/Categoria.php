<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Categoria extends Model
{
    protected $table = 'categorias';

    protected $primaryKey = 'id_categoria';

    protected $fillable = [
       'tipo_solicitud'
    ];

    protected $hidden = [
        'created_at', 'updated_at',
    ];


    public function solicitudes()
    {
        return $this->hasMany('App\Models\Solicitud', 'categoria_id');
    }
}
