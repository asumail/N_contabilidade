<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class SubEmpresa extends Model
{
    public function users() {
        return $this->belongsToMany('App\User');
    }
}
