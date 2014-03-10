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
<script src="//ajax.googleapis.com/ajax/libs/angularjs/1.2.14/angular.min.js"></script> <!-- load angular -->

<!-- ANGULAR -->
<!-- all angular resources will be loaded fontawesomerom the /public folder -->
<script src="js/controllers/mainCtrl.js"><mainCtrl/script> <!-- load our controller -->
<script src="js/services/CommenttService.js"></script> <!-- load our service -->
<script src="js/app.js"></script> <!-- load our application -->

</head>
<!-- declare our angular app and controller -->
<body class="container" ng-app="blogApp" ng-controller="mainController">
</body>
</html>
