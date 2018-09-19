function getFood() {
	console.log("HERER");
	console.log($('#search').val());
	$.get({ url: 'Router.php',
		data: {method: "search"}
	});	
}