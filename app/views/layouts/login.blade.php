<?php /* @var $this Controller */ ?>
<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml" xml:lang="en" lang="en">
<head>
	<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
	<meta name="language" content="en" />
  {{ HTML::style("css/login.css")}}

  <title>Login</title>
</head>

<body>

<div class="container" id="page">

  @yield('content')

	<div class="clear"></div>

</div><!-- page -->

<div id="footer">
  Copyright &copy; <?php echo date('Y'); ?> by zhxrain.<br/>
  All Rights Reserved.<br/>
</div><!-- footer -->

</body>
</html>
