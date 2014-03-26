<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta name="description" content="">
    <meta name="author" content="">

    <title>{{ $post->title }}</title>

    {{ HTML::script("js/jquery-1.10.2.js") }}
    {{ HTML::script("js/bootstrap.js") }}
    {{ HTML::script("js/ghostdown.js") }}
    <!-- Bootstrap core CSS -->
    {{ HTML::style("css/bootstrap.css") }}

    <!-- Add custom CSS here -->
    {{ HTML::style("css/blog-post.css") }}

    <script>
      $().ready(function() {
        var converter = new Showdown.converter();
        var preview = document.getElementsByClassName('rendered-content')[0];
        preview.innerHTML = converter.makeHtml("{{ $post->markdown }}");
      });
    </script>

</head>

<body>

    <nav class="navbar navbar-inverse navbar-fixed-top" role="navigation">
        <div class="container">
            <div class="navbar-header">
                <button type="button" class="navbar-toggle" data-toggle="collapse" data-target=".navbar-ex1-collapse">
                    <span class="sr-only">Toggle navigation</span>
                    <span class="icon-bar"></span>
                    <span class="icon-bar"></span>
                    <span class="icon-bar"></span>
                </button>
                <a class="navbar-brand" href="/">Zhxrain</a>
            </div>

            <!-- Collect the nav links, forms, and other content for toggling -->
            <!-- /.navbar-collapse -->
        </div>
        <!-- /.container -->
    </nav>

    <div class="container">

        <div class="row">
            <div class="col-lg-8">

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

            </div>

            <div class="col-lg-4">
                <div class="well">
                    <h4>Blog Search</h4>
                    <div class="input-group">
                        <input type="text" class="form-control">
                        <span class="input-group-btn">
                            <button class="btn btn-default" type="button">
                                <span class="glyphicon glyphicon-search"></span>
                            </button>
                        </span>
                    </div>
                    <!-- /input-group -->
                </div>
                <!-- /well -->
                <div class="well">
                    <h4>Popular Blog Categories</h4>
                    <div class="row">
                        <div class="col-lg-6">
                            <ul class="list-unstyled">
                                <li><a href="#dinosaurs">Dinosaurs</a>
                                </li>
                                <li><a href="#spaceships">Spaceships</a>
                                </li>
                                <li><a href="#fried-foods">Fried Foods</a>
                                </li>
                                <li><a href="#wild-animals">Wild Animals</a>
                                </li>
                            </ul>
                        </div>
                        <div class="col-lg-6">
                            <ul class="list-unstyled">
                                <li><a href="#alien-abductions">Alien Abductions</a>
                                </li>
                                <li><a href="#business-casual">Business Casual</a>
                                </li>
                                <li><a href="#robots">Robots</a>
                                </li>
                                <li><a href="#fireworks">Fireworks</a>
                                </li>
                            </ul>
                        </div>
                    </div>
                </div>
                <!-- /well -->
                <div class="well">
                    <h4>Side Widget Well</h4>
                    <p>Bootstrap's default wells work great for side widgets! What is a widget anyways...?</p>
                </div>
                <!-- /well -->
            </div>
        </div>

        <hr>

        <footer>
            <div class="row">
                <div class="col-lg-12">
                    <p>Copyright &copy; zhxrain 2014</p>
                </div>
            </div>
        </footer>

    </div>
    <!-- /.container -->

    <!-- JavaScript -->

</body>

</html>
