<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta name="description" content="">
    <meta name="author" content="">

    <title>Zhxrain's Blog</title>

    {{ HTML::script("js/jquery-1.10.2.js") }}
    {{ HTML::script("js/bootstrap.js") }}
    {{ HTML::script("js/ghostdown.js") }}
    {{ HTML::script("js/basic.js") }}
    <!-- Bootstrap core CSS -->
    {{ HTML::style("css/bootstrap.css") }}
    {{ HTML::style("css/bootstrap-social.css") }}
    {{ HTML::style("css/font-awesome.css") }}

    <!-- Add custom CSS here -->
    {{ HTML::style("css/blog-home.css") }}
    {{ HTML::style("css/blog-post.css") }}
    {{ HTML::style("css/basic.css") }}
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
                <a class="navbar-brand" href="/index.php">Zhxrain的进阶之路</a>
            </div>

            <!-- Collect the nav links, forms, and other content for toggling -->
            <!-- /.navbar-collapse -->
        </div>
        <!-- /.container -->
    </nav>

    <div class="container">

        <div class="row">
            <div class="col-lg-8">
                @yield('content')
            </div>

            <div class="col-lg-4">
                <div class="well">
                    <h4>Blog Search</h4>
                    <form action="/post/search/" method="get">
                        <div class="input-group">
                            <input type="text" name="keyword" class="form-control">
                            <span class="input-group-btn">
                                <button class="btn btn-default" type="submit">
                                    <span class="glyphicon glyphicon-search"></span>
                                </button>
                            </span>
                        </div>
                    </form>
                    <!-- /input-group -->
                </div>
                <div class="well">
                  <iframe width="100%" height="550" class="share_self"  frameborder="0" scrolling="no" src="http://widget.weibo.com/weiboshow/index.php?language=&width=0&height=650&fansRow=2&ptype=1&speed=0&skin=1&isTitle=0&noborder=0&isWeibo=1&isFans=1&uid=1631588710&verifier=0213fd08&dpc=1"></iframe>
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
                    <a class="btn btn-social btn-twitter" href="https://twitter.com/zhxrain">
                        <i class="fa fa-twitter"></i>Twitter
                    </a>
                    <a class="btn btn-social btn-github" href="https://github.com/zhxrain">
                        <i class="fa fa-github"></i>Github
                    </a>
                    <a class="btn btn-social btn-google-plus" href="https://plus.google.com/113575239509050213393/posts">
                        <i class="fa fa-google-plus"></i>g+
                    </a>
                </div>
            </div>
            <br>
            <div class="row">
                <div class="col-lg-12">
                    <p>Copyright &copy; zhxrain 2014</p>
                </div>
            </div>
        </footer>

    </div>
    <!-- /.container -->

</body>

</html>
