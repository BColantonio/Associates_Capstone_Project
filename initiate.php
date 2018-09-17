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
		<script type="text/javascript">
			
			
		</script>
							
	</td>
</th>
</body>
</html>