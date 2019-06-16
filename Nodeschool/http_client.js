var url = process.argv[2];
var http = require('http');

http.get(url, function(response){
    var result = [];
    response.setEncoding('utf8');
    
    response.on("data", function (data) { 
       result.push(data);
    });
    
    response.on("end", function() {
        result.forEach(function(chunk){
            console.log(chunk);
        });
    });
});


/*
var http = require('http')
    
    http.get(process.argv[2], function (response) {
      response.setEncoding('utf8')
      response.on('data', console.log)
      response.on('error', console.error)
    })
 */