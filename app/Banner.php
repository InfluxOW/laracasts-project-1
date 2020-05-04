<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Banner extends Model
{
    protected $fillable = ['url'];

    // Relations

    public function user()
    {
        return $this->belongsTo(User::class);
    }
}
