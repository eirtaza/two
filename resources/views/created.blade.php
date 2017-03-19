@extends('layout')

@section('content')
    <div class="col-md-4">
        <h1>Account created</h1>

        @include('partials.errors')

        Your account has been created.
        <br>
        Please check you mailbox to verify your account.

    </div>
@stop