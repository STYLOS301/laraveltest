<!doctype html>
<html>
<head>
	{{ HTML::style('/packages/stylos/stblog/main.css') }}
	<title>Look at me Login</title>
</head>
<h2> Registration </h2>
        {{ Form::open() }}
<p>
            {{ Form::text('email', null, ['placeholder' => 'awesome@awesome.com']) }}
</br>
            {{ Form::password('password', ['placeholder'=> 'password']) }}
            {{ Form::password('repeat-password', ['placeholder'=> 'repeat password']) }}
            {{ Form::submit('Register') }}
        {{ Form::close() }}
</p>

</html>
