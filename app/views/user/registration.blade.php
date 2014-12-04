@extends("layout")
@section("content")
<!doctype html>
<html>
<head>
	{{ HTML::style('/public/css/app.css') }}
	<title>Look at me Login</title>
</head>
<h2> Registration </h2>
        {{ Form::open() }}
<p>
            {{ Form::text('username', null, ['placeholder' => 'username']) }}
            {{ Form::text('email', null, ['placeholder' => 'awesome@awesome.com']) }}
           
</br>
            {{ Form::password('password', ['placeholder'=> 'password']) }}
            {{ Form::password('repeat-password', ['placeholder'=> 'repeat password']) }}
            {{ Form::submit('Register') }}
        {{ Form::close() }}
</p>

</html>
@stop