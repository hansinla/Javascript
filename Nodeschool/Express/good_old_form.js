var express = require('express');
var bodyParser = require('body-parser');
var port = process.argv[2];
var app = express();

// parse application/x-www-form-urlencoded
app.use(bodyParser.urlencoded({ extended: false }));

// This route receives the posted form.
// As explained above, usage of 'body-parser' means
// that `req.body` will be filled in with the form elements
app.post('/form', function(req, res){
	var revStr = req.body.str.split("").reverse().join("");
	res.send(revStr);
});

app.listen(port);

/*
ALT

var express = require('express')
    var bodyParser = require('body-parser')
    var app = express()
    
    app.use(bodyParser.urlencoded({extended: false}))
    
    app.post('/form', function(req, res) {
      res.send(req.body.str.split('').reverse().join(''))
    })
    
    app.listen(process.argv[2])

 */