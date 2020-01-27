<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Solicitud extends Model
{
    protected $table = 'solicitudes';

    protected $primaryKey = 'id_solicitud';

    protected $fillable = [
        'categoria_id', 'solicitante_id', 'archivo'
    ];

    protected $hidden = [
        'created_at', 'updated_at',
    ];

    public function proyecto()
    {
        return $this->hasOne('App\Models\Proyecto', 'solicitud_id');
    }

    public function solicitante()
    {
        return $this->belongsTo('App\Models\Solicitante', 'solicitante_id');
    }
    public function categoria()
    {
        return $this->belongsTo('App\Models\Categoria', 'categoria_id');
    }

    public function historiales()
    {
        return $this->hasMany('App\Models\Historial', 'solicitud_id');
    }

    public function anexos()
    {
        return $this->hasMany('App\Models\Anexo', 'solicitud_id');
    }

    public function radicados()
    {
        return $this->belongsToMany('App\Models\Radicado', 'radicado_solicitud', 'solicitud_id', 'radicado_id');
    }

    public function documentos()
    {
        return $this->belongsToMany('App\Models\Documento', 'anexos', 'solicitud_id', 'documento_id');
    }
    public function estados()
    {
        return $this->belongsToMany('App\Models\Estado', 'historiales', 'solicitud_id', 'estado_id');
    }
    public function users()
    {
        return $this->belongsToMany('App\Models\User', 'historiales', 'solicitud_id', 'user_id');
    }
}
