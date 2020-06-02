<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class CommunityLinkVote extends Model
{
    protected $table = 'community_links_votes';
    protected $guarded = [];

    public function toggle()
    {
        if ($this->exists) {
            return $this->delete();
        }

        return $this->save();
    }
}
