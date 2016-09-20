<?php

namespace App\Repositories;

use App\User;
use App\Bureauprofile;
class BureauprofileRepository
{
    /**
     * Get all of the tasks for a given user.
     *
     * @param  User  $user
     * @return Collection
     */
    public function forUser(User $user)
    {
        return $user->bureauprofiles()->get();
    }

}