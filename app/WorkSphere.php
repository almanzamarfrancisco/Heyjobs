<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class WorkSphere extends Model
{
	public function occupations(){
    	return $this->belongsToMany(Occupation::class, 'work_sphere_occupations');
	}
}
