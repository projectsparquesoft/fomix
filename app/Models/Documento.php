<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Documento extends Model
{
    protected $table = 'documentos';

    protected $primaryKey = 'id_documento';

    protected $fillable = [
       'tipo_documento', 'categoria'
    ];

    protected $hidden = [
        'created_at', 'updated_at',
    ];


    public function falta()
    {
        return $this->belongsToMany('App\Models\Empleado', 'empleado_dependencia', 'dependencia_id', 'empleado_id');
    }
}
