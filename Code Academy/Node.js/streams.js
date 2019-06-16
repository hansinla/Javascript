// readable , writeable

http.createServer(function(request,response){
	response.writeHead(200);
	request.on('readable', function(){
		var chunk = null;
		while(null !== (chunk = request.read())){
			console.log(chunk.toString());
			///---- response.write(chunk);
		}
	});
	request.on('end', function(){
		response.end();
	})
}).listen(8080);

///////////   using pipe    //////////

http.createServer(function(request,response){
	response.writeHead(200);
	request.pipe(response);
}).listen(8080);

// $ curl -d 'hello' http://localhost:8080


/////////////////  reading writing files ///////////////////

var fs = require('fs'); // require filesystem module
var file = fs.createReadStream('readme.md');
var newFile = fs.createWriteStream("readme_copy.md");
file.pipe(newFile);

///////////////// upload file /////////

var fs = require('fs');
var http = require('http');

http.createServer(function(request,response){
	var newFile = fs.createWriteStream("readme_copy.md");
	request.pipe(newFile);

	request.on('end', function(){
		response.end('uploaded');
	});
}).listen(8080);

// $ curl --upload-file readme.md http://localhost:8080

////// progress 
///////////////// 

http.createServer(function(request,response){
	var newFile = fs.createWriteStream("readme_copy.md");
	var fileBytes = request.headers['content-length'];
	var uploadedBytes = 0;

	request.on('readable', function(){
		var chunk = null;
		while(null !== (chunk = request.read())){
			uploadedBytes += chunk.length;
			var progress = (uploadedBytes/fileByttes) * 100;
			response.write("progress: " + parseInt(progress, 10) + "%\n");
		}
	request.pipe(newFile);

	request.on('end', function(){
		response.end('uploaded');
	});
}).listen(8080);


/////challenges

var fs = require('fs');
var file = fs.createReadStream('fruits.txt');

file.on('readable', function(){
  var chunk = null;
  while(null !== (chunk = file.read())){
			console.log(chunk.toString());
		}
});

/////challenges


var file = fs.createReadStream('fruits.txt');
file.pipe(process.stdout);

/////challenges

