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

    public function scopeSearch($query, $search)
    {
        return $query->where('razon_social', 'like', "%$search%")
            ->orWhere('email', 'like', "%$search%")
            ->orWhere('celular', 'like', "%$search%")
            ->orWhere('representante_legal', 'like', "%$search%");
    }

}
