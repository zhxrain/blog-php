<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta name="description" content="">
    <meta name="author" content="">

    <title>{{ $post->title }}</title>

    <!-- Bootstrap core CSS -->
    {{ HTML::style("css/bootstrap.css") }}

    <!-- Add custom CSS here -->
    {{ HTML::style("css/blog-post.css") }}

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
                <p>{{ $post->content }}</p>
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
                    <h4>Leave a Comment:</h4>
                    <form role="form">
                        <div class="form-group">
                            <textarea class="form-control" rows="3"></textarea>
                        </div>
                        <button type="submit" class="btn btn-primary">Submit</button>
                    </form>
                </div>

                <hr>

                <!-- the comments -->
                @foreach( $post->comments as $comment)
                <h3>{{ $comment->author }}
                    <small>{{ $comment->created_at }}</small>
                </h3>
                <p>{{ $comment->content }}</p>
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
    {{ HTML::script("js/jquery-1.10.2.js") }}
    {{ HTML::script("js/bootstrap.js") }}

</body>

</html>
