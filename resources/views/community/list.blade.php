<div class="card">
    <div class="card-header">Community Links</div>
    <ul class="list-group">
        @forelse($links as $link)
            <li class="list-group-item d-flex justify-content-between align-items-center">
                <form action="/votes/{{$link->id}}" method="POST">
                    @csrf
                    <button class="btn btn-info {{Auth::check() && Auth::user()->votedFor($link) ? "btn-danger" : ""}}">{{$link->votes->count()}}</button>
                </form>
                <a href="/community/{{$link->channel->slug}}">
                        <span class="badge badge-primary badge-pill"
                              style="background-color: {{$link->channel->color}}">{{$link->channel->title}}</span></a>
                <a href="{{$link->link}}" target="_blank">
                    {{$link->title}}
                </a>
                <a href="#">
                        <span class="badge badge-primary badge-pill">
                        Contributed By {{$link->user->name}}
                            {{$link->updated_at->diffForHumans()}}
                        </span>
                </a>
            </li>
        @empty
            <h2>No links here</h2>
        @endforelse
    </ul>
</div>
{{$links->links()}}
