<?php

namespace App;

use Illuminate\Database\Eloquent\Relations\Pivot;

class Post extends Pivot
{
    public function provider(){
        return $this->belongsTo(Provider::class, 'provider_id');
    }
}
