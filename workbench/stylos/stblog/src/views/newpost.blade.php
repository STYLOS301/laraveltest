<html>
<head>
{{ HTML::style('/packages/stylos/stblog/main.css') }}
<title>New Post</title>
</head>
<body>
{{ Form::open(array('url' => '/newpost/insert')) }}
<h1>Enter New Post</h1>
		<!-- if there are login errors, show them here -->
<p>
			{{ $errors->first('header') }}
			{{ $errors->first('link') }}
			{{ $errors->first('article') }}
</p>

<p>
			{{ Form::label('header', 'Enter Header') }}
  			{{ Form::text('Header') }}
</p>
<p>
			{{ Form::label('link', 'Link') }}
			{{ Form::text('Link') }}
</p>
<p>
			{{ Form::label('article', 'Atricle') }}
			{{ Form::textarea('Article') }}
</p>


<p>{{ Form::submit('Submit!') }}</p>
	{{ Form::close() }}
</body>
<html>
