<?php

namespace App;

use Illuminate\Database\Eloquent\Model;
use App\user;
class Bclient extends Model
{
    protected $guarded=[''];


    public function user()
    {
        return $this->belongsTo('App\User');
    }
    //
}
