<?php

namespace App;

use Illuminate\Foundation\Auth\User as Authenticatable;
use Illuminate\Notifications\Notifiable;

class User extends Authenticatable
{
    use Notifiable;

    /**
     * The attributes that are mass assignable.
     *
     * @var array
     */
    protected $fillable = [
        'name', 'email', 'password',
    ];

    /**
     * The attributes that should be hidden for arrays.
     *
     * @var array
     */
    protected $hidden = [
        'password', 'remember_token',
    ];

    /**
     * The attributes that should be cast to native types.
     *
     * @var array
     */
    protected $casts = [
        'email_verified_at' => 'datetime',
    ];

//    public function voteFor(CommunityLink $link)
//    {
//        return $this->votes()->attach($link);
//    }

//    public function unvoteFor(CommunityLink $link)
//    {
//        return $this->votes()->detach($link);
//    }

    public function votes()
    {
        return $this->belongsToMany(CommunityLink::class, 'community_links_votes')->withTimestamps();
    }

    public function votedFor(CommunityLink $link)
    {
        return $link->votes->contains('user_id', $this->id);
    }

    public function isTrusted()
    {
        return $this->trusted;
    }

    public function toggleVoteFor(CommunityLink $link)
    {
        CommunityLinkVote::firstOrNew([
            'user_id' => $this->id,
            'community_link_id' => $link->id,
        ])->toggle();
    }

    public function links()
    {
        return  $this->hasMany(CommunityLink::class);
    }
}
