<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Image extends Model
{
    protected $fillable = ['url', 'type', 'user_id'];

    public function imageable()
    {
        return $this->morphTo();
    }
}
