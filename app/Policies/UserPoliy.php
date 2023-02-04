<?php

namespace App\Policies;

use App\Models\User;
use Illuminate\Auth\Access\HandlesAuthorization;

class UserPoliy
{
    use HandlesAuthorization;

    public function edit(User $currentUser, User $user)
    {
        return $currentUser->is($user);
    }
}
