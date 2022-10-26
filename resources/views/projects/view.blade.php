@extends('layouts.app')

@section('content')
    <div class="">
        <table class="">
            <tr>
                <td><strong>Project Name</strong></td>
                <td><strong>Deadline</strong></td>
            </tr>
            @foreach($projects as $project)
            <tr>
                <td>{{$project['project_name']}}</td>
                <td>{{$project['deadline']}}</td>
            </tr>
            @endforeach
        </table>
    </div>
@endsection
