@extends('layouts.layout')

@section('content')
    <table>
        <tr>
            <th>First name</th>
            <th>Last name</th>
            <th>Email</th>
            <th>Actions</th>
        </tr>
    @foreach($clients as $client)
            <tr>
                <th>{{ $client->first_name }}</th>
                <th>{{ $client->last_name }}</th>
                <th>{{ $client->email }}</th>
                <th>
                    <a class="btn" href="{{ url('/client/' . $client->id) }}">Edit Client</a>
                    <a class="btn" href="{{ url('/client/delete/' . $client->id) }}">Delete Client</a>
                </th>
            </tr>
    @endforeach

    </table>
    {{ $clients->links() }}
@endsection