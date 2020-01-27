<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Solicitante extends Model
{
    protected $table = 'solicitantes';

    protected $primaryKey = 'id_solicitante';

    protected $fillable = [
        'municipio_id',
        'persona_id',
        'proponente_id',
        'nid',
        'razon_social',
        'email',
        'direccion',
        'celular',
        'telefono',
        'representante_legal',
    ];

    protected $hidden = [
        'created_at', 'updated_at',
    ];

    public function setRazonSocialAttribute($value)
    {
        $this->attributes['razon_social'] = ucwords($value);
    }

    public function setRepresentanteLegalAttribute($value)
    {
        $this->attributes['representante_legal'] = ucwords($value);
    }
}
