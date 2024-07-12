<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class pago extends Model
{
    use HasFactory;

    public function colaborador(){

        return $this->belongsTo('App\Models\colaborador');
    }

    public function tipopago(){

        return $this->belongsTo('App\Models\tipopago');
    }
}
