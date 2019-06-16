var express = require('express');
var port = process.argv[2];
var app = express();

app.get('/search/?', function(req, res){
    
    var jsonObject = {
    	results: req.query.results,
    	type: req.query.type,
    	quote: req.query.quote,
    	page: req.query.page
    };

	res.send(JSON.stringify(jsonObject));
	res.end();
});

app.listen(port);