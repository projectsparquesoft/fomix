<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Anexo extends Model
{
    protected $table = 'anexos';

    protected $primaryKey = 'id_anexo';

    protected $fillable = [
       'documento_id', 'solicitud_id', 'ruta', 'status'
    ];

    protected $hidden = [
        'created_at', 'updated_at',
    ];


    public function solicitud()
    {
        return $this->belongsTo('App\Models\Solicitud', 'solicitud_id');
    }
    public function documento()
    {
        return $this->belongsTo('App\Models\Documento', 'documento_id');
    }

}
