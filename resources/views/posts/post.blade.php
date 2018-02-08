@extends('layouts.layout')

@section('content')
    
            <div class="well">
                <h1>
                    <strong>{{$post->title}}</strong>
                    <small>( {{$post->created_at->diffForHumans()}} )</small>
                </h1>
                <h4><i>{{$post->user->name}}</i></h4>
                <h3>{!!$post->body!!}</h3>
                <hr>

                <div>
                    @if(auth()->id()==$post->user_id)
                    <a href="/posts/{{$post->id}}/edit" class="btn btn-default">Edit</a>
                      
                    <form method="POST" action="/posts/{{$post->id}}" class="pull-right">
                        {{ method_field('DELETE') }}
                        <input type="hidden" name="_token" value="{{ csrf_token() }}">
                        <button type="Submit" class="btn btn-danger">Delete</button>
                    </form>
                    @endif
                </div>
                <hr>

            </div> 

                @include('comments/comment') 

    
@endsection