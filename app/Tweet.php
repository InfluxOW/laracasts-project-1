<?php

namespace App;

use App\Traits\Likeable;
use Illuminate\Database\Eloquent\Model;

class Tweet extends Model
{
    use Likeable;

    protected $fillable = ['body'];

    // Relations

    public function user()
    {
        return $this->belongsTo(User::class);
    }

    public function image()
    {
        return $this->morphOne('App\Image', 'imageable')->where('type', 'image');
    }

    //

    public function hasImage()
    {
        return isset($this->image);
    }

    public function getImageUrl()
    {
        return $this->image->url;
    }
}
