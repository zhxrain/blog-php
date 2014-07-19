<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml" xml:lang="en" lang="en">
<head>
  <meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
  <meta name="language" content="en" />
  {{ HTML::script("js/jquery-1.10.2.js") }}
  {{ HTML::script("js/bootstrap.js") }}
  {{ HTML::script("js/ghostdown.js") }}
  {{ HTML::script("js/basic.js") }}
  {{ HTML::script("js/bootbox.js") }}
  <!-- Bootstrap core CSS -->
  {{ HTML::style("css/bootstrap.css") }}

  <!-- Add custom CSS here -->
  {{ HTML::style("css/blog-home.css") }}

  {{ HTML::style("css/main.css") }}
  {{ HTML::style("css/basic.css") }}

  <script>
    $().ready(function() {
      var converter = new Showdown.converter();
      var preview = document.getElementsByClassName('rendered-content')[0];
      var string = hereDoc(function () {/*{{ $posts->first()->markdown or ''}}*/});
      preview.innerHTML = converter.makeHtml(string);
      $('ul.list-group.post-list').find('li').first().addClass('active');

      $('ul.list-group.post-list li').click(function(e) {
        var converter = new Showdown.converter();
        var preview = document.getElementsByClassName('rendered-content')[0];
        var id = parseInt($(this).attr("id"));
        $('ul.list-group.post-list').find('li').removeClass('active');
        $(this).addClass('active');
        $.ajax({
          url: 'api/v1/post/' + id,
          type: 'GET',
          success: function(responseText, status){
            var string = hereDoc( responseText.markdown );
            preview.innerHTML = converter.makeHtml(string);
          },
          error: function(request, status){
            bootbox.alert("Get post error!", function() {
            });
          }
        });
        $('#post-edit').attr('href','admin/editor/' + id);
        $('#post-delete').attr('href','javascript:deletePost(' + id + ')');
      });
    });

    function deletePost(id)
    {
      bootbox.confirm("Are you sure?", function(result) {
        if(result == true) {
          $.ajax({
            url: 'posts/' + id,
            type: 'DELETE',
            success: function(response, status){
              location.reload();
            },
            error: function(request, status){
              bootbox.alert("Delete post error!", function() {
              });
            }
          });
        }
      });
    }
  </script>
</head>
<body>
    <nav class="navbar navbar-inverse navbar-fixed-top" role="navigation">
        <div class="container-full">
            <div class="navbar-header">
                <button type="button" class="navbar-toggle" data-toggle="collapse" data-target=".navbar-ex1-collapse">
                    <span class="sr-only">Toggle navigation</span>
                    <span class="icon-bar"></span>
                    <span class="icon-bar"></span>
                    <span class="icon-bar"></span>
                </button>
                <a class="navbar-brand" href="index.php">主页</a>
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
                <div class="top-tool">
                  <form action="admin/logout" method="Get">
                    <button><span class="glyphicon glyphicon-log-out"></span></button>
                  <form>
                </div>
            </div>
        </div>
        <!-- /.container -->
    </nav>

    <div class="content">
        <div class="row">
            <div class="col-xs-3">
                <ul class="list-group post-list";>
                @foreach($posts as $post)
                    <li class="list-group-item" id={{ $post->id }}>
                      <h4>{{ $post->title }}</h4>
                      <div class="status">
                        @if($post->status == "published")
                        <p>已发布</p>
                        @else
                        <p>草稿</p>
                        @endif
                      </div>
                    </li>
                @endforeach
                </ul>
            </div>
            <div class="col-xs-9">
                <div class="content-option">
                    @if($posts->count() != 0)
                    <a id="post-edit" href="admin/editor/{{ $posts->first()->id }}"><span class="glyphicon glyphicon-edit"></span></a>
                    <a id="post-delete" href="javascript:deletePost({{ $posts->first()->id }})"><span class="glyphicon glyphicon-remove-circle"></span></a>
                    @endif
                </div>
                <div class="rendered-content">
                </div>
            </div>
        </div>
    </div>
    <div class="footer">
        <p>Copyright &copy; zhxrain 2014</p>
    </div>
</body>
</html>
