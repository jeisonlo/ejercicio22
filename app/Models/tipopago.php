<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class tipopago extends Model
{
    use HasFactory;


    public function pagos(){

        return $this->hasMany('App\Models\pago');
    }
}
