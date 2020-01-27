<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Solicitante extends Model
{
    protected $table = 'solicitantes';

    protected $primaryKey = 'id_solicitante';

    protected $fillable = [
       'municipio_id', 'persona_id', 'proponente_id', 'nid', 'nombre','apellido', 'razon_social', 'email', 'direccion', 'celular', 'telefono', 'representante_legal'
    ];

    protected $hidden = [
        'created_at', 'updated_at',
    ];


    public function municipio()
    {
        return $this->belongsTo('App\Models\Municipio', 'muncipio_id');
    }
    public function persona()
    {
        return $this->belongsTo('App\Models\Persona', 'persona_id');
    }
    public function proponente()
    {
        return $this->belongsTo('App\Models\proponente', 'proponente_id');
    }
    public function solicitudes()
    {
        return $this->hasMany('App\Models\Solicitud', 'solicitante_id');
    }

}
