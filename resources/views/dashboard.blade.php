@extends('layout')

@section('content')
    <div class="col-md-12">

        <button class="pull-right">Add Campaing</button>
        <h1>My Account</h1>

        {{--Table--}}
        <table class="table table-striped table-bordered">
            <thead>
            <tr>
                <th>Campaing Name</th>
                <th>Campaing URL</th>
                <th>Start Date</th>
                <th>End Date</th>
                <th>Default / Custom points</th>
                <th>Total users</th>
                <th>Total points</th>
                <th>Action</th>
            </tr>
            </thead>
            <tbody>
            <tr>
                <td>John</td>
                <td>John</td>
                <td>John</td>
                <td>John</td>
                <td>John</td>
                <td>John</td>
                <td>Doe</td>
                <td>john@example.com</td>
            </tr>
            </tbody>
        </table>
    </div>
@stop