@extends('layouts.layout')

@section('content')
    <form action="{{ url('/client/form/' . (isset($client->id) ? $client->id : '')) }}" method="POST">
    {{ csrf_field() }}
        <div class="col-md-3">
            <label>First name :
                <input type="text" name="first_name" value="{{ isset($client->first_name) ? $client->first_name : '' }}">
            </label>
            <label>Last name :
                <input type="text" name="last_name" value="{{ isset($client->last_name) ? $client->last_name : '' }}">
            </label>
            <label>Email :
                <input type="email" name="email" value="{{ isset($client->email) ? $client->email : '' }}">
            </label>
            <label>Password :<input type="password" name="password"></label>
        </div>

        <div>
            <input type="submit">
        </div>
    </form>
@endsection