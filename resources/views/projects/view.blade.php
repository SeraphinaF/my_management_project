@extends('layouts.app')

@section('content')
    <div class="">
        <a href="{{ route('projects.create') }}">Create new project</a>
        <a href="{{ route('projects.create') }}">Add new category</a>
    </div>
        <table class="">
            <tr>
                <td><strong>Project Name</strong></td>
                <td><strong>Deadline</strong></td>
            </tr>
            @foreach($projects as $project)
            <tr>
                <td>{{$project['project_name']}}</td>
                <td>{{$project['deadline']}}</td>
                <td><a href="{{ route('projects.show', $project->id) }}">View</a></td>
            </tr>
            @endforeach
        </table>
    </div>
@endsection
