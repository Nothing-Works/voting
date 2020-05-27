<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Channel extends Model
{
    protected $guarded = [];

    public function links()
    {
        return $this->hasMany(CommunityLink::class);
    }
}
