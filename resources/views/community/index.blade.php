@extends('layouts.app')

@section('content')
    <div class="container">
        <div class="row justify-content-center">
            <div class="col-md-8">
                <h1><a href="/community">Links</a></h1>
                @if ($channel)
                    <h2>{{$channel->title}}</h2>
                @endif
                @include('community.list')
            </div>
            @auth
                @include('community._linksForm')
            @endauth
        </div>
    </div>
@endsection
