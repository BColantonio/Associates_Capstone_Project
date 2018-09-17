<?php

//onload, if POST email isn't set, display join-us content/initial load screen.
if (empty($_POST['email'])) {
		require_once 'joinForm.php';	
}
function action($request, $query){
switch($action){
	case "search":
		$request = new request;
		$request->setMashapeKey($key);
		//username & password not provided. authentication possible via host/key combo. 'verifypeer' disabled to avoid error.
		$request->verifyPeer($enabled = false);

		$headers = array('Accept' => 'application/json');
		$request = Request::get("https://spoonacular-recipe-food-nutrition-v1.p.mashape.com/food/products/search?query=" . $query,
  array(
    "X-Mashape-Key" => $key,
    "X-Mashape-Host" => $host
  )
);
};	
}
?>
