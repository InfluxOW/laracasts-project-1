<?php

namespace App\Traits;

use App\Notifications\UserFollowed;
use App\User;
use Illuminate\Database\Eloquent\Builder;

trait Followable
{
    public function follows()
    {
        return $this->belongsToMany(User::class, 'follows', 'user_id', 'following_user_id')->withTimestamps();
    }

    public function toggleFollow(User $user)
    {
        $this->follows()->toggle($user);

        if ($this->isFollowing($user)) {
            $user->notify(new UserFollowed($this));
        }
    }

    public function isFollowing(User $user)
    {
        return $this->follows()->where('following_user_id', $user->id)->exists();
    }

    public function scopeFollowers(Builder $query)
    {
        return $query->whereHas('follows', function ($query) {
            return $query->where('following_user_id', $this->id);
        });
    }
}
