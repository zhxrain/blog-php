@extends('layouts.main')

@section('content')

<!-- the actual blog post: title/author/date/content -->
<h1>{{ $post->title }}</h1>
<p class="lead">by <a href="index.php">ZhongXiang</a>
</p>
<hr>
<p>
    <span class="glyphicon glyphicon-time"></span> Posted on {{ $post->created_at }} </p>
<hr>
<p class="lead"></p>
<div class="rendered-content"></div>
<p><strong>Placeholder text by:</strong>
</p>
<ul>
    <li><a href="http://spaceipsum.com/">Space Ipsum</a>
    </li>
    <li><a href="http://cupcakeipsum.com/">Cupcake Ipsum</a>
    </li>
    <li><a href="http://tunaipsum.com/">Tuna Ipsum</a>
    </li>
</ul>

<hr>

<!-- the comment box -->
<div class="well">
    <h4>留言:</h4>
    <form class="form-horizontal" role="form" action="/comments" method="POST">
        <input type="hidden" name="post_id" value={{ $post->id }}>
        <div class="form-group">
            <label for="inputUsername" class="col-sm-2 control-label">昵称(必填):</label>
            <div class="col-sm-5">
                <input type="text" class="form-control" name="author" id="inputUsername" placeholder="昵称" required>
            </div>
        </div>
        <div class="form-group">
            <label for="inputEmail" class="col-sm-2 control-label">Email:</label>
            <div class="col-sm-5">
                <input type="email" class="form-control" name="email" id="inputEmail" placeholder="Email">
            </div>
        </div>
        <div class="form-group">
            <label for="inputComment" class="col-sm-2 control-label">内容(必填):</label>
            <div class="col-sm-10">
                <textarea class="form-control" name="content" id="inputComment" rows="5" required></textarea>
            </div>
        </div>
        <div class="form-group">
            <div class="col-sm-offset-2 col-sm-10">
                <button type="submit" class="btn btn-primary">提交</button>
            </div>
        </div>
    </form>
</div>

<hr>

<!-- the comments -->

<?php $count=1?>
@foreach( $post->comments as $comment)
<div class="well">
  <div class="act">
    <a href="#">回复</a>｜<a href="#">引用</a>
  </div>
  <div class="info">
      <div class="author"> {{ $comment->author }} </div>
      <div class="date"> <small>{{ $comment->created_at }}|#{{ $count }}</small> </div>
  </div>
  <div class="comment">
    <p>{{ $comment->content }}</p>
  </div>
</div>
<?php $count++ ?>
@endforeach

@stop
