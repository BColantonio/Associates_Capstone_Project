<?php
$method = $_GET['method'] ?? $_POST['method'] ?? null;
$params = $_GET['request'] ?? $_POST['request'] ?? null;
require __DIR__.'/vendor/autoload.php';
switch($method){
	case "search":
		//Build new spoontacular item query
		$request = new Request;
		$request->setMashapeKey($key);
		$request->verifyPeer($enabled = false);				
		$request->jsonOpts($assoc = true, $depth = 512, $options = 0);
		$request = $request->get($url="https://spoonacular-recipe-food-nutrition-v1.p.mashape.com/food/products/search?query=" . $params);				
		return $request;
		break;
	};

	//if POST email isn't set, display join-us content/initial load screen.
	//else if (is_null($action) && is_null($email)) {
		//require_once 'joinForm.php';
	//}
	//use javascript to dynamically display results
	?>
	