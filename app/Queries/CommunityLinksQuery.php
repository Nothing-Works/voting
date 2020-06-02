<?php

namespace App\Queries;

use App\Channel;
use App\CommunityLink;

class CommunityLinksQuery
{
    public function get($orderByPopular, Channel $channel = null)
    {
        $orderBy = $orderByPopular ? 'votes_count' : 'updated_at';

        return CommunityLink::forChannel($channel)
            ->with('votes', 'user', 'channel')
            ->where('approved', 1)
            ->withCount('votes')
            ->orderBy($orderBy, 'desc')
            ->paginate(3)
        ;
    }
}
