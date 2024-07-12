<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class colaborador extends Model
{
    use HasFactory;

    public function proyectos(){

        return $this->belongsToMany('App\Models\proyecto');
    }

    public function pagos(){

        return $this->hasMany('App\Models\pago');
    }
}
