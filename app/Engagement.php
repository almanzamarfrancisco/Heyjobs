<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Engagement extends Model
{
    protected $casts = [
        'estimated_completion_date' => 'datetime',
    ];

}
