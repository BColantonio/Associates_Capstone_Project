<?php

class Build extends Request {
	
	protected $apiKey = "6CN9jXeUKHmshacErW3t06bXAcjnp1FWopIjsn8bxdYPJwQ77d";
	public $scheme ='https';
	public $host = 'spoonacular-recipe-food-nutrition-v1.p.mashape.com';
	$this->query = $query;
		var_dump($query);
	
	$request = new Request;
	$request->setMashapeKey($apiKey);
	
	//username & password not provided. authentication possible via host/key combo. 'verifypeer' disabled to avoid error.
	$request->verifyPeer($enabled = false);

	$headers = array('Accept' => 'application/json');
	
	$response = Request::get("https://spoonacular-recipe-food-nutrition-v1.p.mashape.com/food/products/search?query=" . $query,
		array(
			"X-Mashape-Key" => $key,
			"X-Mashape-Host" => $host
		)
	);
};
?>