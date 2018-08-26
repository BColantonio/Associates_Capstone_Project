<?php
if (!function_exists('json_decode')) {
	throw new Exception ('JSON Extension is required to run the API.');
}

class API
{
	private $API_ID = API_ID;
	private $API_KEY = API_KEY;
	private $food_id_url = 'https://spoonacular-recipe-food-nutrition-v1.p.mashape.com/food/products/search?query=';
	private $food_detail_url = 'https://spoonacular-recipe-food-nutrition-v1.p.mashape.com/food/products/';
	
	require __DIR__ . '/vendor/autoload.php';
	use RapidApi\RapidApiConnect;
	$rapid = new RapidApiConnect('default-application_5b7a1221e4b0e54f757f1a3c', '460412fd-b284-4104-a927-37ca77010f5e');
	/*public function construct($API_ID, $API_KEY, $food_id_url)
	{
		$_GET['api_foodId'] = $food_id_url . $food;		
	}*/
}
?>

<html>
<head></head>
<body>
<?php
$api = new class API; 
$rapid->call('NasaAPI', 'getPictureOfTheDay', [])

?>
</body>
</html>