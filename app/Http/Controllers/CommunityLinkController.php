<?php

namespace App\Http\Controllers;

use App\Channel;
use App\CommunityLink;
use Illuminate\Http\Request;

class CommunityLinkController extends Controller
{
    public function index()
    {
        return view(
            'community.index',
            [
                'links' => CommunityLink::where('approved', 1)->paginate(25),
                'channels' => Channel::orderBy('title', 'asc')->get(),
            ]
        );
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
    }

    public function store(Request $request)
    {
        $attributes = $request->validate([
            'channel_id' => 'required|exists:channels,id',
            'title' => 'required',
            'link' => 'required|active_url|unique:community_links',
        ]);

        CommunityLink::comeFrom(auth()->user())->contribute($attributes);

        if (auth()->user()->isTrusted()) {
            flash('Thanks for the contribution!')->success();
        } else {
            flash()->overlay('This contribution will be approved shortly.', 'Thanks!');
        }

        return back();
    }

    /**
     * Display the specified resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function show(CommunityLink $communityLink)
    {
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function edit(CommunityLink $communityLink)
    {
    }

    /**
     * Update the specified resource in storage.
     *
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, CommunityLink $communityLink)
    {
    }

    /**
     * Remove the specified resource from storage.
     *
     * @return \Illuminate\Http\Response
     */
    public function destroy(CommunityLink $communityLink)
    {
    }
}
