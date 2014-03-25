<!doctype html>
<html lang="en">
<head>
	<meta charset="UTF-8">
	<title>Ghost Down</title>

  {{ HTML::script("js/jquery-1.10.2.js") }}
  {{ HTML::script("js/bootstrap.js") }}
  {{ HTML::style("css/bootstrap.css") }}

	<!-- Ghosty-ness markdowny-ness -->
  {{ HTML::script("js/ghostdown.js") }}
  {{ HTML::style("css/ghostdown.css") }}

</head>
<body>
    <div class="header">
    <nav class="navbar navbar-inverse navbar-fixed-top" role="navigation">
        <div class="container">
            <div class="navbar-header">
                <button type="button" class="navbar-toggle" data-toggle="collapse" data-target=".navbar-ex1-collapse">
                    <span class="sr-only">Toggle navigation</span>
                    <span class="icon-bar"></span>
                    <span class="icon-bar"></span>
                    <span class="icon-bar"></span>
                </button>
                <a class="navbar-brand" href="index.php">Zhxrain</a>
            </div>

            <!-- Collect the nav links, forms, and other content for toggling -->
            <!-- /.navbar-collapse -->
        </div>
        <!-- /.container -->
    </nav>
    </div>

    <div class="features">

		<section class="editor">
			<div class="outer">
				<div class="editorwrap">
					<section class="entry-markdown">
						<header class="floatingheader">
							&nbsp;&nbsp; Markdown
						</header>
						<section class="entry-markdown-content">
              <textarea id="entry-markdown">{{ $post->markdown or "" }}</textarea>
						</section>
					</section>
					<section class="entry-preview active">
						<header class="floatingheader">
						  &nbsp;&nbsp; Preview <span class="entry-word-count">0 words</span>
						</header>
						<section class="entry-preview-content">
							<div class="rendered-markdown"></div>
						</section>
					</section>
				</div>
			</div>
		</section>

    </div>
    <div class="footer">
      <button>提交</button>
    </div>

</body>
</html>
