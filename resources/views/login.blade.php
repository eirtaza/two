@extends('layout')

@section('content')
    <div class="col-md-4">
        <h1>Login</h1>
        {{ Form::open() }}

        @include('partials.errors')
        
        {{ Form::text('email', null, ["placeholder" => "Your Email address", "class" => "form-control formelem"] ) }}
        {{ Form::password('password', ["placeholder" => "Password", "class" => "form-control formelem"]) }}
        {{ Form::submit('Login!', ["class" => "form-control formelem btn btn-primary"]) }}


        {{ Form::close() }}
    </div>
@stop