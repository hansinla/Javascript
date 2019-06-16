//////// middleware

var express = require('express');
var app = express();

var logger = require('/logger');
app.use(logger);

// create a route
app.get('/', function(request, response){
	response.sendFile(__dirname + '/index.html');
});

app.listen(3000);


// middleware

app.use(express.static('public'));


/// limit number of answers

app.get('/blocks', function(request, response){
	var blocks = ['fixed', 'moveable', 'rotating'];
	if (request.query.limit >=0){
		response.json(blocks.slice(0, request.query.limit));
	} else {
		response.json(blocks);
	}
});


/// Dynamic routes
var blocks = {
	'Fixed': "Fastened securely in place",
	'Moveable': "Capable of being moved",
	'Rotating': "Moving in a circle around its center"
};

app.get('/blocks/:name', function(rquest, response){
	var description = blocks[request.params.name];
	if (!description) {
		response.status(404).json("No description for "+ request.params.name);
	} else {
		response.json(description);
	}
	
});