var express = require('express');
var fs = require('fs');
var filename = process.argv[3];
var port = process.argv[2];
var app = express();

app.set('json spaces', 0); // workaround for bug
app.get('/books', function (request, res) {
    fs.readFile(filename, 'utf8', function (err, data) {
        if (err) {
            throw err;
        } else {
            res.json(JSON.parse(data));
        }
        res.end();
    });
}).listen(port);
