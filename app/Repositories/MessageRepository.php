<?php

namespace App\Repositories;

use App\User;
use App\Message;
class MessageRepository
{
    /**
     * Get all of the tasks for a given user.
     *
     * @param  User  $user
     * @return Collection
     */
    public function fromUser(User $user)
    {
        return Message::
            orderBy('messages.created_at', 'desc')->where('messages.to',$user->id)
            ->join('profiles','messages.user_id','=','profiles.user_id')
            ->select('messages.id as messageId' ,'messages.messagebody','profiles.photo','profiles.first_name','profiles.id as profileId')
            ->paginate(7);
            //->get();
    }
    public function forUser(User $user)
    {
        return $user->messages()
            ->orderBy('messages.created_at', 'desc')
            ->join('profiles','messages.to','=','profiles.user_id')
            ->select('messages.id as messageId' ,'messages.messagebody','profiles.photo','profiles.first_name','profiles.id as profileId')
            ->get();
    }
}