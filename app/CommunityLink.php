<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class CommunityLink extends Model
{
    protected $guarded = [];

    public function user()
    {
        return $this->belongsTo(User::class);
    }

    public function channel()
    {
        return $this->belongsTo(Channel::class);
    }

    public static function comeFrom(User $user)
    {
        $link = new static();
        $link->user_id = $user->id;

        $link->channel_id = 1;

        return $link;
    }

    public function contribute($attributes)
    {
        return $this->fill($attributes)->save();
    }
}
