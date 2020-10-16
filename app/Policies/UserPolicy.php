<?php

namespace App\Policies;

use App\Models\User;
use Illuminate\Auth\Access\HandlesAuthorization;

class UserPolicy
{
    use HandlesAuthorization;

    public function viewAny(User $authUser)
    {
        return $authUser->isAdmin();
    }

    public function delete(User $authUser, User $user)
    {
        if ($user->canBeDeleted())  {
            return false;
        }

        return $authUser->isAdmin();
    }
}
