<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Engagement extends Model
{
    /*protected $casts = [
        'estimated_completion_date' => 'datetime',
    ];*/
    public $fillable = [
    	"user_id",
		"provider_id",
		"state",
		"request",
		"concept",
        "prepayment",
		"description",
        "estimated_completion_date",
    ];
    public function user()
    {
        return $this->belongsTo(User::class, 'user_id');
    }
    public function provider()
    {
        return $this->belongsTo(Provider::class, 'provider_id');
    }
}
