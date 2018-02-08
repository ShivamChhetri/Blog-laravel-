@extends('layouts.layout')

@section('content')

<div class="row">
    <div class="col-md-8 col-md-offset-2">
        <h1>Create Post</h1>
        <br>

        @include('inc/errors')

        <form method='POST' action='/posts'>
            <input type="hidden" name="_token" value="{{ csrf_token() }}">
            <div class="form-group">
                <label>Title</label>
                <input type="text" name='title' class="form-control">
            </div>
            <div class="form-group">
                <label>Body</label>
                <textarea type="text" name='body' id='article-ckeditor' class="form-control"></textarea>
            </div>
            <button type="submit" class="btn btn-primary">Publish</button>
        </form>
    </div>
</div>
@endsection