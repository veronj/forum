<article>
    <div class="panel-heading">Posted by <a href="#">{{ $reply->owner->name }}</a> - {{ $reply->created_at }}</div>
    <div class="body">{{ $reply->body }}</div>
    <hr>
</article>