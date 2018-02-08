@extends('layouts.layout')

@section('content')
    
    
<div>

    <h1>Posts</h1>
    <br>

    @if(count($posts)>0)
        @foreach($posts as $post)
            <div class="well">
                <h3>
                    <a href="/posts/{{$post->id}}">{{$post->title}}</a>
                    <small>{{$post->created_at->diffForHumans()}}</small>
                </h3>
                <h5><i>{{$post->user->name}}</i></h5>
                
                <p>{!!$post->body!!}</p>
            </div>    
        @endforeach
    @endif

</div>
    
@endsection