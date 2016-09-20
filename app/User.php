<?php

namespace App;

use Illuminate\Foundation\Auth\User as Authenticatable;
use App\Message;
use App\Profile;
use App\Blockuser;
use App\Bclient;
use App\bureauprofile;
class User extends Authenticatable
{
    /**
     * The attributes that are mass assignable.
     *
     * @var array
     */
    protected $fillable = [
        'name', 'email', 'password','gender','age','country'
    ];

    /**
     * The attributes that should be hidden for arrays.
     *
     * @var array
     */
    protected $hidden = [
        'password', 'remember_token',
    ];

    public function messages()
    {
        return $this->hasMany(Message::class);
    }
    public function profiles()
    {
        return $this->hasOne(Profile::class);
    }
    public function bureauprofiles()
{
    return $this->hasOne(Bureauprofile::class);
}
    public function bclients(){
    return $this->hasmany(Bclient::class);
}
    public function blockusers()
    {
        return $this->hasMany(Blockuser::class);
    }

    public function getEmail()
    {
        return $this->email;
    }
}
