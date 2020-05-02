<?php

namespace App\Traits;

use App\Like;
use App\User;
use Illuminate\Database\Eloquent\Builder;

trait Likeable
{

    // Relations

    public function likes()
    {
        return $this->hasMany(Like::class)->where('liked', true);
    }


    public function dislikes()
    {
        return $this->hasMany(Like::class)->where('liked', false);
    }

    //

    public function like(User $user, $liked = true)
    {
        $like = Like::where('user_id', $user->id)->where('tweet_id', $this->id)->first();

        if ($like) {
            $like->update(['liked' => $liked]);
        } else {
            Like::create(['user_id' => $user->id, 'tweet_id' => $this->id, 'liked' => $liked]);
        }
    }

    public function dislike(User $user)
    {
        return $this->like($user, false);
    }

    public function isLikedBy(User $user)
    {
        return $user->likes->where('tweet_id', $this->id)->where('liked', true)->count() === 1;
    }

    public function isDislikedBy(User $user)
    {
        return $user->likes->where('tweet_id', $this->id)->where('liked', false)->count() === 1;
    }
}
