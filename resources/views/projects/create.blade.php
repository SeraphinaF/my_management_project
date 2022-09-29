@extends('projects.layout')

@section('content')

    <h2>Create New Project</h2>

    <form action="{{route('projects.store')}}" method="POST">
        @csrf

        <label for="pname">New Project:</label><br>
        <input type="text" id="pname" name="project_name" value=""><br>
        <label for="deadline">Deadline:</label><br>
        <input type="text" id="deadline" name="deadline" value=""><br><br>
        <input type="submit" value="Submit">
    </form>

@endsection
