<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Avatar extends Model
{
    protected $fillable = ['url'];

    // Relations

    public function user()
    {
        return $this->belongsTo(User::class);
    }
}
