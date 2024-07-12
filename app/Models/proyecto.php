<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class proyecto extends Model
{
    use HasFactory;

    public function cliente (){

        return $this->belongsTo('App\Models\cliente');
    }


    public function colaboradors(){

        return $this->belongsToMany('App\Models\colaborador');
    }
}
