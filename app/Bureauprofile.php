<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Bureauprofile extends Model
{
    //
    protected $guarded = ['sec_photo'];
    public function user()
    {
        return $this->belongsTo(User::class);
    }

}
