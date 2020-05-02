<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Like extends Model
{
    protected $fillable = ['liked', 'user_id', 'tweet_id'];

    public function user()
    {
        $this->belongsTo('App\User');
    }

    public function tweet()
    {
        $this->belongsTo('App\Tweet');
    }
}
