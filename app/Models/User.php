<?php

namespace App\Models;

// use Illuminate\Contracts\Auth\MustVerifyEmail;

use App\Trait\followable;
use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Relations\BelongsToMany;
use Illuminate\Database\Eloquent\Relations\HasMany;
use Illuminate\Foundation\Auth\User as Authenticatable;
use Illuminate\Notifications\Notifiable;
use Laravel\Sanctum\HasApiTokens;

class User extends Authenticatable
{
    use HasApiTokens, HasFactory, Notifiable, followable;

    /**
     * The attributes that are mass assignable.
     *
     * @var array<int, string>
     */
    // protected $fillable = [
    //     'username',
    //     'name',
    //     'email',
    //     'password',
    //     'avatar'
    // ];

    //?or use
    //without selecte property
    protected $guarded = [];

    /**
     * The attributes that should be hidden for serialization.
     *
     * @var array<int, string>
     */
    protected $hidden = [
        'password',
        'remember_token',
    ];

    /**
     * The attributes that should be cast.
     *
     * @var array<string, string>
     */
    protected $casts = [
        'email_verified_at' => 'datetime',
    ];

    public function getAvatarAttribute($value)
    {
        return "https://i.pravatar.cc/200?u=" . $this->email;

    }


    public function timeline()
    {
        // return Tweet::where('user_id', $this->id)->latest()->get();
        //include all of the user's tweets
        //as well as the tweets of everyone
        //the follow..in descending order by date
        // $ids = $this->follows->pluck('id');
        // $ids->push($this->id);
        // return  Tweet::whereIn('user_id', $ids)->latest()->get();

        $friends = $this->follows()->pluck('id');

        return  Tweet::whereIn('user_id', $friends)
            ->orWhere('user_id', $this->id)
            ->latest()
            ->get();
    }

    /**
     * Get all of the tweets for the User
     *
     * @return \Illuminate\Database\Eloquent\Relations\HasMany
     */
    public function tweets(): HasMany
    {
        return $this->hasMany(Tweet::class)->latest();
    }

    //in laravel 6

    // public function getRouteKeyName()
    // {
    //     return 'name';
    // }
    //go to route/web

    public function path($append = '')
    {
        $path = route('profile', $this->username);
        return $append ? "{$path}/{$append}" : $path;
    }
}
