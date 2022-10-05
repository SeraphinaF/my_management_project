@extends('layouts.app')
@vite('resources/sass/home.scss');

@section('content')
<div class="container">
    <div class="row justify-content-center">
        <div class="col-md-8">
{{--            <div class="card">--}}
{{--                <div class="card-header">{{ __('Dashboard') }}</div>--}}

{{--                <div class="card-body">--}}
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
                    <form class="card-form" action="projects/create">
                        @csrf
                        <div class="input">
                            <input type="text" name="project_name" class="input-field" value="" required/>
                            <label class="input-label">Project name</label>
                        </div>
                        <div class="input">
                            <input type="text" name="" class="input-field" value="" required/>
                            <label class="input-label">Category</label>
                        </div>
                        <div class="input">
                            <input type="datetime-local" name="deadline" class="input-field" value="" required/>
                            <label class="input-label">Deadline</label>
                        </div>
                        <div class="action">
                            <button class="action-button">Get started</button>
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
