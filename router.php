<?php
$method = $_GET['method'] ?? $_POST['method'] ?? null;
$params = $_GET['request'] ?? $_POST['request'] ?? null;
$key = '6CN9jXeUKHmshacErW3t06bXAcjnp1FWopIjsn8bxdYPJwQ77d';
require __DIR__.'/vendor/autoload.php';
switch($method){
	case "search":
		//Build new spoontacular item query
		$request = new Unirest\Request;
		$request->setMashapeKey($key);
		$request->verifyPeer($enabled = false);				
		$request->jsonOpts($assoc = true, $depth = 512, $options = 0);
		$request = $request->get($url="https://spoonacular-recipe-food-nutrition-v1.p.mashape.com/food/products/search?query=" . $params, array(
            'Accept' => 'application/json'
        ));
		$cats = $request->body['products'];
		echo json_encode($cats);
		break;
	case "ingredients":
		$request = new Unirest\Request;
		$request->setMashapeKey($key);
		$request->verifyPeer($enabled = false);				
		$request->jsonOpts($assoc = true, $depth = 512, $options = 0);
		$request = $request->get($url="https://spoonacular-recipe-food-nutrition-v1.p.mashape.com/food/products/" . $params, array(
            'Accept' => 'application/json'
        ));
		echo json_encode($request->body);
		break;
	};
	
 
	//if POST email isn't set, display join-us content/initial load screen.
	if (is_null($method) && is_null($params)) {
		require_once 'joinForm.php';
	}
	//use javascript to dynamically display results
	?>
	