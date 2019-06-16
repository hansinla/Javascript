var http = require('http');
var fs = require('fs');
var map = require('through2-map');

var portnum = process.argv[2];
var filename = process.argv[3];

http.createServer(function (request, response) {
    request
        .pipe(map(function (chunk) {
            return chunk.toString().toUpperCase();
        }))
        .pipe(response);
}).listen(portnum);

