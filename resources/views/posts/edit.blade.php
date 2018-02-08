@extends('layouts.layout')

@section('content')

<div class="row">
    <div class="col-md-8 col-md-offset-2">

        <h1>Edit Post</h1>
        <br>

        @include('inc/errors')

        <form method='POST' action='/posts/{{$post->id}}'>
            {{ method_field('PATCH') }}
            <input type="hidden" name="_token" value="{{ csrf_token() }}">
            <div class="form-group">
                <label>Title</label>
                <input type="text" name='title' value="{{$post->title}}" class="form-control">
            </div>
            <div class="form-group">
                <label>Body</label>
                <textarea type="text"name='body' id="article-ckeditor" class="form-control">{!!$post->body!!}</textarea>
            </div>

            <button type="submit" class="btn btn-primary">Update</button>    
        </form>
    </div>
</div>    
@endsection

 