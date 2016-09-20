<?php

namespace App\Repositories;

use App\User;
use App\Profile;
class ProfileRepository
{
    /**
     * Get all of the tasks for a given user.
     *
     * @param  User  $user
     * @return Collection
     */
    public function forUser(User $user)
    {
        return $user->profiles()->get();
    }
    public function forid(Profile $profile, $id){
return $profile->find($id);
    }
}