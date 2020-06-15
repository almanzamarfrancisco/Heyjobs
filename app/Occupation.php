<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Occupation extends Model
{
    public function providers(){
        return $this->belongsToMany(Provider::class, 'provider_occupations');
    }
}
