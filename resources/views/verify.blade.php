@extends('layout')

@section('content')
    <div class="col-md-4">
        <h1>Verification status</h1>

        @include('partials.errors')

        <h3>{{ $status }}</h3>

    </div>
@stop