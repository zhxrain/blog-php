<!-- app/views/index.php -->
<!doctype html>
<html lang="en">
<head>
<meta charset="UTF-8">
<title>Laravel and Angular Comment System</title>

<!--    CSS -->
<!--link rel="stylesheet" href="//netdna.bootstrapcdn.com/bootstrapcdnap/3.1.0/css/bootstrap.min.css"--> <!-- load bootstrap via cdn -->
<!--link rel="stylesheet" href="//netdna.bootstrapcdn.com/font-awesome/4.0.3/css/font-awesome.min.css"--> <!-- load fontawesome -->

<!-- JS -->
<!--script src="//ajax.googleapis.comom/ajax/libs/jquery/2.0.3/jquery.min.js"></script-->

<!-- ANGULAR -->
<!-- all angular resources will be loaded fontawesomerom the /public folder -->
{{ HTML::script('lib/angular.js') }}
{{ HTML::script('js/app.js') }}

</head>
<!-- declare our angular app and controller -->
<body class="container" ng-app="blogApp" ng-controller="mainController">
</body>
</html>
