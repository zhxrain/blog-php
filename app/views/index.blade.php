<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml" xml:lang="en" lang="en">
<head>
  <meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
  <meta name="language" content="en" />
  <!-- Bootstrap core CSS -->
  {{ HTML::style("css/bootstrap.css") }}

  <!-- Add custom CSS here -->
  {{ HTML::style("css/blog-home.css") }}

  {{ HTML::style("css/main.css") }}
</head>
<body>
    <div class="header">
    <nav class="navbar navbar-inverse navbar-fixed-top" role="navigation">
        <div class="container-full">
            <div class="navbar-header">
                <button type="button" class="navbar-toggle" data-toggle="collapse" data-target=".navbar-ex1-collapse">
                    <span class="sr-only">Toggle navigation</span>
                    <span class="icon-bar"></span>
                    <span class="icon-bar"></span>
                    <span class="icon-bar"></span>
                </button>
                <a class="navbar-brand" href="index.php">管理页面</a>
            </div>

            <!-- Collect the nav links, forms, and other content for toggling -->
            <!-- /.navbar-collapse -->
            <div class="collapse navbar-collapse navbar-ex1-collapse">
                <ul class="nav navbar-nav">
                    <li><a href="/admin">文章</a>
                    </li>
                    <li><a href="/admin/editor">新建</a>
                    </li>
                </ul>
            </div>
        </div>
        <!-- /.container -->
    </nav>
    </div>

    <div class="container-full main">
        <div class="row">
            <div class="col-lg-2">
                <div class="post-list">
                    <ul class="list-group";>
                    @foreach($posts as $post)
                        <li class="list-group-item"><a href="#" class="list-group-item active">{{ $post->title }}</a></li>
                    @endforeach
                    </ul>
                </div>
            </div>
            <div class="col-lg-10">
                content
            </div>
        </div>
    </div>
</body>
</html>
