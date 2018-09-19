function getFood() {
	var searchValue = $('#search').val();
	$.get({ url: 'Router.php',
		data: {method: "search", request: searchValue},
		success: function(output) {
		var arrayOutput = JSON.parse(output);
		 arrayOutput.forEach(function(output) {
			$.get({ url: 'Router.php',
			data: {method: "ingredients", request: output.id},
			success: function(ingredients) {
				var productOutput = JSON.parse(ingredients);
				console.log(typeof productOutput.badges[10]);
				for (var i = 0; i < productOutput.badges.length; i++){
					if(jQuery.inArray("vegetarian", productOutput.badges) !== -1){
						var vegVerified = "- VEGETARIAN"
					}
					else{
						vegVerified = "- NOT VEGETARIAN";
					}}
				$("#products").append('<h2>' + productOutput.title + ' ' + vegVerified + '</h2>');					
				$("#products").append('<ul>');
				$("#products").append('<li><h3>Ingredients:</h3></li>');
				productOutput.ingredients.forEach(function(ingredient) {
					$('#products').append('<li>'+ ingredient.name + '</li>');
				});
				$("#products").append('</ul>');	
			},
			error: function(error) {
			  console.error(error);
			}
			});	
		 })
		},
		error: function(error) {
		  console.error(error);
		}
	});	
}




// First get the data you want to present on the screen, your return data is an object that has a mix between arrays (productOutput.ingredients)
// and string properties (title). LOOK AT YOUR CONSOLE FOR THE DATA.  

// Once your data is raw and on screen,  add CSS, bootsrap, or raw CSS file,  if you add another style sheet dont forget to link it inside index.php, 
// or just add them web/styles/index.css.

// Dont forget, before each serach you need to .empty() out the #products $('#products').empty(); in order to not repeat old ingredients and recipes