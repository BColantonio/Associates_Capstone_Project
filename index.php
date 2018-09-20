<?php
//Required files and libraries.
//Spoontacular API implimented with SDK code provided from COMPOSER library manager
require __DIR__ . '/vendor/autoload.php';
$key = '6CN9jXeUKHmshacErW3t06bXAcjnp1FWopIjsn8bxdYPJwQ77d';
$scheme ='https';
$host = 'spoonacular-recipe-food-nutrition-v1.p.mashape.com';
?>
<html xmlns="http://www.w3.org/1999/html">
    <meta charset="utf-8">
    <meta http-equiv="cache-control" content="no-cache, must-revalidate, post-check=0, pre-check=0">
    <meta http-equiv="expires" content="0">
    <meta http-equiv="pragma" content="no-cache">
    <title>SmartCart</title>

    <meta http-equiv="Content-Language" content="en">
	<meta name="viewport" content="width=device-width, initial-scale=1">

    <head>
	<link href="https://fonts.googleapis.com/css?family=Montserrat" rel="stylesheet">
	<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css">
	<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.3.1/jquery.min.js"></script>
	<script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js"></script>
		<script src='web/js/init.js'></script>
		<link rel="stylesheet" href="web/styles/index.css">
    </head>
	<?php		
	// get the data from user, if any
	$action = filter_input(INPUT_GET, 'action', FILTER_SANITIZE_STRING) ?? filter_input(INPUT_POST, 'action', FILTER_SANITIZE_STRING) ?? NULL;
	$email = filter_input(INPUT_GET, 'email', FILTER_SANITIZE_STRING) ?? filter_input(INPUT_POST, 'email', FILTER_SANITIZE_STRING) ?? NULL;
	$pwd = filter_input(INPUT_GET, 'pwd', FILTER_SANITIZE_STRING) ?? filter_input(INPUT_POST, 'pwd', FILTER_SANITIZE_STRING) ?? NULL;
	$query = filter_input(INPUT_GET, 'search', FILTER_SANITIZE_STRING) ?? filter_input(INPUT_POST, 'search', FILTER_SANITIZE_STRING) ?? NULL;
	include 'header.php';
	include 'router.php';
    ?>
	<body>
	<footer class="page-footer font-small">
		<div class="footer-copyright text-center py-3">Copyright &copy; 2018 Brian Colantonio. All Rights Reserved</div>
	</footer>	
	</body>
</html>