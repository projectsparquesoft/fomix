<?php

namespace App;

use Illuminate\Foundation\Auth\User as Authenticatable;
use Illuminate\Notifications\Notifiable;

class User extends Authenticatable
{
    use Notifiable;

    protected $fillable = [
        'empleado_id', 'email', 'password', 'is_password'
    ];

    protected $hidden = [
        'password', 'remember_token',
    ];

    protected $casts = [
        'email_verified_at' => 'datetime',
    ];

    public function empleado()
    {
        return $this->belongsTo('App\Models\Empleado', 'empleado_id');
    }

    public function solicitudes()
    {
        return $this->belongsToMany('App\Models\Solicitud', 'historiales', 'user_id', 'solicitud_id');
    }
}
