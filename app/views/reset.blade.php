@extends("layout")
@section("content")
    {{ Form::open() }}
        {{ $errors->first("token") }}<br />
        {{ Form::label("email", "Email") }}
        {{ Form::text("email", Input::get("email")) }}
        {{ $errors->first("email") }}<br />
        {{ Form::label("password", "Password") }}
        {{ Form::text("password", Input::get("password")) }}
        {{ $errors->first("password") }}<br />
        {{ Form::label("password_confirmation", "Confirm") }}
        {{ Form::password("password_confirmation") }}
        {{ $errors->first("password_confirmation") }}<br />
        {{ Form::submit("reset") }}
    {{ Form::close() }}
@stop
