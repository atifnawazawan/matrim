<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Blockuser extends Model
{
protected $fillable=['block_user_id'];


    public function user()
    {
        return $this->belongsTo('App\User');
    }

    //
}
