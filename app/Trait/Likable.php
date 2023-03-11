<?php

namespace App\Trait;

use App\Models\User;
use Illuminate\Database\Eloquent\Builder;
use Illuminate\Support\Facades\DB;

trait Likable
{

    //Tweet::withLikes()->get();

    public function scopeWithLikes(Builder $query)
    {
        // $query->leftJoinSub(
        //     'SELECT tweet_id, SUM(liked) likes, SUM(!liked) dislikes  FROM likes GROUP BY tweet_id',
        //     'likes',
        //     'likes.tweet_id',
        //     'tweets.id'
        // );

        // return $query->select(
        //     'tweets.*',
        //     DB::raw('SUM(liked) as likes'),
        //     DB::raw('SUM(!liked) as dislikes')
        // )
        //     ->leftJoin('likes', 'likes.tweet_id', '=', 'tweets.id')
        //     ->groupBy('tweets.id');
        /////
        return  $query->withCount(['likes' => function ($query) {
            $query->where('liked', 1);
        }]);
    }


    //$tweet->like();
    public function like($user = null, $liked = true)
    {
        $this->likes()->updateOrCreate([
            'user_id' => $user ? $user->id : auth()->id(),
        ], [
            'liked' => $liked
        ]);
    }


    //$tweet->dislike()
    public function dislike($user = null)
    {
        $this->like($user, false);
    }

    public function isLikedBy(User $user)
    {
        return (bool) $this->likes()
            ->where('user_id', $user->id)
            ->where('liked', true)
            ->count();
    }


    public function isDisLikedBy(User $user)
    {
        return (bool) $this->likes()
            ->where('user_id', $user->id)
            ->where('liked', false)
            ->count();
    }
}
