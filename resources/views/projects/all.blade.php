@extends('layouts.layout')

@section('content')
    <table>
        <tr>
            <th>Name</th>
            <th>Description</th>
            <th>Status</th>
            <th>Actions</th>
        </tr>
        @foreach($projects as $project)
            <tr>
                <th>{{ $project->name }}</th>
                <th>{{ $project->description }}</th>
                <th>{{ $project->status }}</th>
                <th>
                    <a class="btn" href="{{ url('/project/' . $project->id) }}">Edit Client</a>
                    <a class="btn" href="{{ url('/project/delete/' . $project->id) }}">Delete Client</a>
                </th>
            </tr>
        @endforeach

    </table>
    {{ $projects->links() }}
@endsection