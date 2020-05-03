<?php

namespace App;

use App\Traits\Followable;
use Illuminate\Contracts\Auth\MustVerifyEmail;
use Illuminate\Foundation\Auth\User as Authenticatable;
use Illuminate\Notifications\Notifiable;

class User extends Authenticatable
{
    use Notifiable;
    use Followable;

    /**
     * The attributes that are mass assignable.
     *
     * @var array
     */
    protected $fillable = [
        'name', 'email', 'password', 'username', 'avatar_url', 'banner_url', 'description'
    ];

    /**
     * The attributes that should be hidden for arrays.
     *
     * @var array
     */
    protected $hidden = [
        'password', 'remember_token',
    ];

    /**
     * The attributes that should be cast to native types.
     *
     * @var array
     */
    protected $casts = [
        'email_verified_at' => 'datetime',
    ];

    // Relations

    public function tweets()
    {
        return $this->hasMany(Tweet::class)->latest();
    }

    public function likes()
    {
        return $this->hasMany('App\Like');
    }

    //

    public function timeline()
    {
        $ids = $this->follows()->pluck('id')->add($this->id);

        return Tweet::withCount('likes', 'dislikes')->whereIn('user_id', $ids)->latest()->paginate(20);
    }

    public function getAvatar()
    {
        return $this->avatar_url ?? "https://api.adorable.io/avatars/200/abott@adorable{$this->username}";
    }

    public function getBanner()
    {
        return $this->banner_url ?? "https://picsum.photos/seed/{$this->username}/800/270";
    }

    // public function setPasswordAttribute($value)
    // {
    //     return $this->attributes['password'] = bcrypt($value);
    // }
}
