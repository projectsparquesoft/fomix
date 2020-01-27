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


    public function solicitudes()
    {
        return $this->belongsToMany('App\Models\Solicitud', 'anexos',  'documento_id', 'solicitud_id');
    }
}
