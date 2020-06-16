<?php

namespace App;

use Illuminate\Contracts\Auth\MustVerifyEmail;
use Illuminate\Foundation\Auth\User as Authenticatable;
use Illuminate\Notifications\Notifiable;

class Provider extends Authenticatable
{
    use Notifiable;

    /**
     * The attributes that are mass assignable.
     *
     * @var array
     */
    protected $fillable = [
        'name', 'email', 'password',
    ];

    /**
     * The attributes that should be hidden for arrays.
     *
     * @var array
     */
    protected $hidden = [
        'password', 'remember_token',
    ];

    /**
     * The attributes that should be cast to native types.
     *
     * @var array
     */
    protected $casts = [
        'working_schedule' => 'array'
    ];
    public function posts(){
        return $this->hasMany(Post::class);
    }
    public function occupation(){
        return $this->belongsToMany(Occupation::class, 'provider_occupations');
    }
    public function engagements()
    {
        return $this->belongsToMany(User::class, 'engagements');
    }
}