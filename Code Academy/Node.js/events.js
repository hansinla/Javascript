var EventEmitter = require('events').eventEmitter;
var logger = new EventEmitter();

logger.on('error', function(message){
	console.log('ERR: "+ message);')

});

$('p').on('click', function(){


});

logger.emit('error', 'Spilled Milk');

////////

http.createServer(function(request, response){

});


/// same as ////

var server = http.createServer();
server.on('request', function(request, response){

});

////////////////

server.on('close', function(request, response){

});

///////////////

var chat = new EventEmitter();
chat.on('message', function(message){
  
console.log(message);  
});

///////////////////

var events = require('events');
var EventEmitter = events.EventEmitter;

var chat = new EventEmitter();
var users = [], chatlog = [];

chat.on('message', function(message) {
  chatlog.push(message);
});

chat.on('join', function(nickname) {
  users.push(nickname);
});

// Emit events here
chat.emit('join', 'Just emitted a message');
chat.emit('message', 'This is an message');

/////////////////////
var http = require('http');

var server = http.createServer();

server.on('request', function(request, response){
  response.writeHead(200);
  response.write("Hello, this is dog");
  response.end();
});
server.on('request', function(request, response) {
  console.log("New request coming in...");
 });
server.listen(8080);