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
}
