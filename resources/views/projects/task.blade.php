@extends('layouts.app')
@section('content')
    <div class="container">
        <div class="form">
            <input type="text" class="input" />
            <input type="submit" class="add" value="Add Task" />
        </div>
        <div class="tasks"></div>
        <button class="action-button" type="submit">DONE!</button>
        //style met de delete-all
    </div>
@endsection

