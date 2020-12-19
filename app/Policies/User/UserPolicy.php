<?php

namespace App\Policies\User;

use App\Models\User;
use Illuminate\Auth\Access\HandlesAuthorization;

class UserPolicy
{
    use HandlesAuthorization;

    /**
     * Create a new policy instance.
     *
     * @return bool
     */

    public function before(User $user, $ability)
    {
        return true;
        if ($user->hasRole(User::Admin)) {
            return true;
        }
    }


    public function seeUserImage(User $loginUser , User $user )
    {
        return $loginUser->id == $user->id;
    }


}
