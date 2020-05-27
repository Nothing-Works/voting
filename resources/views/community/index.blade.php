@extends('layouts.app')

@section('content')
    <div class="container">
        <div class="row justify-content-center">
            <div class="col-md-8">
                <div class="card">
                    <div class="card-header">Community Links</div>
                    <ul class="list-group">
                        @foreach($links as $link)
                            <a href="{{$link->link}}" target="_blank">
                                <li class="list-group-item d-flex justify-content-between align-items-center">
                                    {{$link->title}}
                                    <a href="#">
                                    <span class="badge badge-primary badge-pill">
                                        Contributed By {{$link->user->name}}
                                        {{$link->updated_at->diffForHumans()}}
                                    </span>
                                    </a>
                                </li>
                            </a>
                        @endforeach
                    </ul>
                </div>
            </div>
            @include('community._linksForm')
        </div>
    </div>
@endsection
