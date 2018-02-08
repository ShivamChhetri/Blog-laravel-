<div class="comments">
    <ul class="list-group">
        @foreach($post->comments as $comment)
        <li class="list-group-item">
            <h3>
                <strong>{{$comment->user->name}}</strong>
                <small><i>( {{$comment->created_at->diffForHumans()}} )</i></small>
        </h3>
            <h4>{{$comment->body}}</h4>
        </li>
        @endforeach
    </ul>

   
