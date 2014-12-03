@section('title')
    {{$header}}
@stop

@section('content')
    <div class="post-block">
        <span><small>{{$created_at}}</small></span>
        <h2>{{$header}}</h2>
        <p>
            {{$article}}
        </p>
    </div>
@stop