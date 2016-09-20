<?php

namespace App;
use App\User;
use Illuminate\Database\Eloquent\Model;

class Message extends Model
{
    //


    protected $fillable = ['messagebody','to','is_read'];

    /**
     * Get the user that owns the task.
     */
    public function user()
    {
        return $this->belongsTo(User::class);
    }
    public function getRouteKeyName()
    {
        return 'user_id';
    }
}
