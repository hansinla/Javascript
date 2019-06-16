var express = require('express');
var port = process.argv[2];
var path = process.argv[3];
var app = express();

app.use(require('stylus').middleware(path));
app.use(express.static(path));

app.listen(port);

/*
ALT

var express = require('express')
    var app = express()
    
    app.use(require('stylus').middleware(process.argv[3]));
    app.use(express.static(process.argv[3]));
    
    
    app.listen(process.argv[2])
 */