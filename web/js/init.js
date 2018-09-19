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
				console.log(productOutput);
				$("#products").append('<h2>' + productOutput.title + '</h2>');
				$("#products").append('<ul>');
				productOutput.ingredients.forEach(function(ingredient) {
					$('#products').append('<li>'+ ingredient.name +'</li>');
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