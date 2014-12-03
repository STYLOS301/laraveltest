@section('title')
    List
@stop

@section('content')
    <small>Number of posts in the blog: {{$count}}</small>
    <ul class="posts-list">
        @forelse($posts as $post)
            @include('stblog::preview')
        @empty
            <li><h3>No records</h3></li>
        @endforelse
    </ul>
@stop