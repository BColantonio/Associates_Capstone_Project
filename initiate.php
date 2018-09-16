<?php
//Required files and libraries.
//Spoontacular API implimented with SDK code provided from COMPOSER library manager
namespace Unirest;
require __DIR__ . '/vendor/autoload.php';
require __DIR__ .  '/vendor/mashape/unirest-php/src/Unirest/Request.php ';

//SPOONTACULAR API credentials
$key = '6CN9jXeUKHmshacErW3t06bXAcjnp1FWopIjsn8bxdYPJwQ77d';
$scheme ='https';
$host = 'spoonacular-recipe-food-nutrition-v1.p.mashape.com';

//Build new spoontacular item query
$request = new request;
$request->setMashapeKey($key);

//username & password not provided. authentication possible via host/key combo. 'verifypeer' disabled to avoid error.
$request->verifyPeer($enabled = false);

$headers = array('Accept' => 'application/json');
$query = 'snickers';


$response = Request::get("https://spoonacular-recipe-food-nutrition-v1.p.mashape.com/food/products/search?query=" . $query,
  array(
    "X-Mashape-Key" => $key,
    "X-Mashape-Host" => $host
  )
);

?>
<header></header>
<html>
<body>
<th>
	<td>
		<?php 
		var_dump($response);
		foreach ($response as $respond) : ?>
			<div class="col-12 col-4">
				<div class = "card">
					<h2 class = "h3 mb-0">
						<?php
						echo 'hey right here!!!';
						echo $respond->'title'; 
						var_dump($respond)?>
					</h2>
					
					<?php endforeach ?>
	</td>
</th>
</body>
</html>