<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Persona extends Model
{
    protected $table = 'personas';

    protected $primaryKey = 'id_persona';

    protected $fillable = [
        'tipo_persona' 
    ];

    protected $hidden = [
       'created_at', 'updated_at'
    ];



}
