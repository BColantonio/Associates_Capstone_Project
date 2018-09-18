<?php
namespace Unirest;
if (is_null($action) == false) {
	switch($action){
		case "search":
			switch($action){
			case "search":
				
				//Build new spoontacular item query
				$request = new Request;
				$request->setMashapeKey($key);
				$request->verifyPeer($enabled = false);				
				$request->jsonOpts($assoc = true, $depth = 512, $options = 0);
				$headers = array('Accept' => 'application/json');
				
				$request = Request::get("https://spoonacular-recipe-food-nutrition-v1.p.mashape.com/food/products/search?query=" . $query);
				  /*array(
					"X-Mashape-Key" => $key,
					"X-Mashape-Host" => $host
				  ));*/
				$response = $request; 
				
			};
		break;
	};
}
	//if POST email isn't set, display join-us content/initial load screen.
	else if (is_null($action) && is_null($email)) {
		require_once 'joinForm.php';
	}
	//use javascript to dynamically display results
	?>
	