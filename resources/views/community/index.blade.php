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
            <div class="col-md-4">
                <h3>Contribute a Link</h3>
                <form method="POST" action="/community">
                    @csrf
                    <div class="form-group">
                        <label for="title">Title</label>
                        <input type="text" name="title" placeholder="what is the title of your link" class="form-control" id="title">
                    </div>
                    <div class="form-group">
                        <label for="link">Link</label>
                        <input type="text" class="form-control" name="link" id="link" placeholder="what is the url">
                    </div>
                    <button type="submit" class="btn btn-primary">Submit</button>
                </form>
            </div>
        </div>
    </div>
@endsection
