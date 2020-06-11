<?php

namespace App;

use Illuminate\Database\Eloquent\Relations\Pivot;

class Post extends Pivot
{
    public function user(){
        return $this->belongsTo(User::class, 'user_id');
    }
}
