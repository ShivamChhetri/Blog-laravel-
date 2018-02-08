@extends('layouts.layout')

@section('content')

    <div class="panel panel-default">
        <div class="panel-heading">Your Profile</div>

        <div class="panel-body">
            @if (session('status'))
                <div class="alert alert-success">
                    {{ session('status') }}
                </div>
            @endif
            
            <a href="/posts/create" class="btn btn-primary">Create Post</a>
            
        </div>
    </div>

@endsection
