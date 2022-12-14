<?php
?>

@extends('layouts.app')
@vite('resources/sass/home.scss');

@section('content')
    <div class="container">
        <div class="row justify-content-center">
            <div class="col-md-8">

                @if (session('status'))
                    <div class="alert alert-success" role="alert">
                        {{ session('status') }}
                    </div>
                @endif

                <div class="container">
                    <!-- code here -->
                    <div class="card">
                        <div class="card-image">
                            <h2 class="card-heading">
                                Get started<br>
                                <small>Let's get productive!</small>
                            </h2>
                        </div>
                        @if($errors->any)
                            @foreach($errors->all() as $error)
                                ERROR: {{$error}}<br>
                            @endforeach
                        @endif
                        <form class="card-form" action="{{route('projects.store')}}" method="post">
                            @csrf

                            <div class="input">
                                <input type="text" name="project_name" class="input-field" value="" >
                                <label class="input-label">Project name</label>
                            </div>

                            <label class="input-label">Category</label>
                            <select name="category_id" class="input-field">
                                <option value=""></option>
                                @foreach($categories as $category)
                                <option value="{{$category->id}}">{{$category->name}}</option>
                                @endforeach
                            </select>

                            <div class="input">
                                <input type="datetime-local" name="deadline" class="input-field" value="" >
                                <label class="input-label">Deadline</label>
                            </div>
                            <div class="action">
                                <button class="action-button" type="submit">Get started</button>
                                //send to next form
                            </div>
                        </form>
                    </div>
                </div>


            </div>
        </div>
    </div>
    </div>
    </div>
@endsection
