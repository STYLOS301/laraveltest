<!DOCTYPE html>
<html>
<head>
    <link href='http://fonts.googleapis.com/css?family=Lora&subset=latin,cyrillic' rel='stylesheet' type='text/css'>
{{ HTML::style('/packages/stylos/stblog/main.css') }}
    <title>
        @yield('title')
    </title>
</head>
<body>
<div class="content">
    <header>
        <h1>StBlog</h1>
        <small>My Test blog pakage for Laravel</small>
    </header>
    </br>
	<div class="autorization_block">
            @if (Auth::check())                   <!-- делаем проверку если пользователь залогинен то привет -->
            Hello  {{  Auth::user()->email }}   !  <a href="logout">Logout</a>
          
            @else                           <!-- если не залогинен предлагаем залогинеться или заргаться -->
	{{ Form::open (['url'=>'/login']) }}
	{{ Form::text('email', null, ['placeholder'=>'e-mail']) }}
	</br>
	{{ Form::password('password', null, ['placeholder'=>'пароль']) }}	
	{{ Form::submit('Login') }} or <a href="/registration"> Registration </a>
	{{ Form::close () }}
            @endif
	</div>
	</br>
        @if (Auth::check())
    <nav>
        <ul>
            <li><a href="/newpost/">New Post</a></li>
            <li><a href="/">Main page</a></li>
            <li><a href="/blog/">Blog</a></li>
        </ul>
    </nav>
        @else
    <nav>
        <ul>
            <li><a href="/">Main page</a></li>
            <li><a href="/blog/">Blog</a></li>
        </ul>
    </nav>
        @endif
    @yield('content')
</div>
    <p>@include('footer')</p>
</body>
</html>
