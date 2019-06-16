var http = require('http');
var answers = {};
var counter = 0;
var urls = [];

for (var i = 2; i < 5; i++) {
    urls.push(process.argv[i]);
}

urls.forEach(function(url){
    http.get(url ,function(response){
        response.setEncoding('utf8');
        var result = "";
        
        response.on("data", function (data) { 
          result += data;
        });
        
        response.on("end", function() {
            answers[url] = result;
            counter++;
            
            if (counter == 3){
                printAll();
            }
        });
    });
    
});

var printAll  = function(){
    urls.forEach(function(url){
        console.log(answers[url]);
    });
};

