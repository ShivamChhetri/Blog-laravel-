<form method="POST" action="/posts/comment">
    
    <input type="hidden" name="_token" value="{{ csrf_token() }}">
    <input type="hidden" name="post_id" value="{{$post->id}}">

    <div class="form-group">
        <textarea class="form-control" name="body" placeholder="Add comment"></textarea>
    </div>
    <div class="form-group">
        <input type="submit" value="Comment" class="btn btn-primary form-control">
    </div>
</form>
</div>