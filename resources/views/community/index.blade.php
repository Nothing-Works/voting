@extends('layouts.app')

@section('content')
    <div class="container">
        <div class="row justify-content-center">
            <div class="col-md-8">
                <h1><a href="/community">Links</a></h1>
                @if ($channel)
                    <h2>{{$channel->title}}</h2>
                @endif
                <ul class="nav nav-tabs">
                    <li class="nav-item"><a href="{{request()->url()}}"
                                            class="nav-link {{request('popular')? '':'active'}}">Most Recent</a></li>
                    <li class="nav-item"><a href="?popular=1" class="nav-link {{request('popular')? 'active':''}}">Most
                            Popular</a></li>
                </ul>
                @include('community.list')
            </div>
            @auth
                @include('community._linksForm')
            @endauth
        </div>
    </div>
@endsection
