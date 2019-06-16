var express = require('express');
var app = express();

// create a route
app.get('/', function(request, response){
	response.send('Hello World!'); // send is Express api
});

app.listen(3000, function(){
	console.log("Listening on port 3000...");
});

//////////////

app.get('/blocks', function(request, response){
	var blocks = ['fixed', 'moveable', 'rotating'];
	response.send(blocks); // send converts to JSON automatically
	// response.json(blocks); // is identical
});

