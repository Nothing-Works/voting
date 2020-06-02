<?php

namespace App\Http\Controllers;

use App\CommunityLink;

class VoteController extends Controller
{
    /**
     * VoteController constructor.
     */
    public function __construct()
    {
        $this->middleware('auth');
    }

    public function store(CommunityLink $link)
    {
        auth()->user()->toggleVoteFor($link);

        return back();
    }
}
