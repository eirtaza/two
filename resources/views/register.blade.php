@extends('layout')

@section('content')
    <div class="col-md-4">
        <h1>Register</h1>
        {{ Form::open() }}

        @include('partials.errors')

        {{ Form::text('firstName', null, ["placeholder" => "Your First Name", "class" => "form-control formelem"] ) }}
        {{ Form::text('lastName', null, ["placeholder" => "Your Last Name", "class" => "form-control formelem"] ) }}
        {{ Form::text('email', null, ["placeholder" => "Your Email address", "class" => "form-control formelem"] ) }}
        {{ Form::password('password', ["placeholder" => "Password", "class" => "form-control formelem"]) }}
        {{ Form::password('password_confirmation', ["placeholder" => "Confirm Password", "class" => "form-control formelem"]) }}
        {{ Form::submit('Register!', ["class" => "form-control formelem btn btn-primary"]) }}


        {{ Form::close() }}
    </div>
@stop