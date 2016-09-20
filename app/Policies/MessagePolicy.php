<?php

namespace App\Policies;

use Illuminate\Auth\Access\HandlesAuthorization;
use App\Message;
use App\User;
class MessagePolicy
{
    use HandlesAuthorization;

    /**
     * Create a new policy instance.
     *
     * @return void
     */

    public function __construct()
    {
        //
    }


    public function send(User $user, Message $message)
    {
        return $user->id === $message->user_id;
    }

}
