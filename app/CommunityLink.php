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
        return new static(['user_id' => $user->id]);
    }

    public function contribute($attributes)
    {
        return $this->fill($attributes)->save();
    }
}
