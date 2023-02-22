<?php

namespace App\Trait;

use App\Models\User;
use Illuminate\Database\Eloquent\Relations\BelongsToMany;

trait followable
{
    public function follow(User $user)
    {
        return $this->follows()->save($user);
    }

    public function unfollow(User $user)
    {
        return $this->follows()->detach($user);
    }

    public function following(User $user)
    {
        // return $this->follows()->contains($user);

        return $this->follows()
            ->where('following_user_id', $user->id)
            ->exists();
    }
    /**
     * Get the follows that owns the User
     *
     * @return \Illuminate\Database\Eloquent\Relations\BelongsTo
     */
    public function follows(): BelongsToMany
    {
        return $this->belongsToMany(User::class, 'follows', 'user_id', 'following_user_id');
    }

    public function toggleFollow(User $user)
    {
        $this->follows()->toggle($user);
    }
}
