<?php

namespace App;

use App\Exceptions\CommunityLinkAlreadySubmitted;
use Illuminate\Database\Eloquent\Builder;
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

    public function votes()
    {
        return $this->hasMany(CommunityLinkVote::class, 'community_link_id');
    }

    public static function comeFrom(User $user)
    {
        $link = new static();
        $link->user_id = $user->id;

        if ($user->isTrusted()) {
            $link->approve();
        }

        return $link;
    }

    /**
     * @param mixed $attributes
     *
     * @throws CommunityLinkAlreadySubmitted
     *
     * @return bool
     */
    public function contribute($attributes)
    {
        if ($existing = $this->hasAlreadyBeenSubmitted($attributes['link'])) {
            $existing->touch();

            throw new CommunityLinkAlreadySubmitted();
        }

        return $this->fill($attributes)->save();
    }

    public function scopeForChannel(Builder $builder, $channel)
    {
        if ($channel) {
            return $builder->where('channel_id', $channel->id);
        }

        return $builder;
    }

    private function hasAlreadyBeenSubmitted($link): CommunityLink
    {
        return static::where('link', $link)->first();
    }

    private function approve()
    {
        $this->approved = true;
    }
}
