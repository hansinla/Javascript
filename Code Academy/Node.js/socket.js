// modern browsers have websockets
// use intelligent fallbacks

$ npm install --save socket.io

var express = require('express');
var app = express();
var server = require('http').createServer(app);
var io = require('socket.io')(server);

io.on('connection', function(client){
	console.log('Client connected...');
	// send messages
	client.emit('messages', {hello: "World!"});
});

app.get('/', function(req, res){
	res.sendFile(__dirname+'/index.html';)
});

server.listen(8080);

// let server listen to events from browser
io.on('connection', function(client){
	client.on('messages', function(data){
		console.log(data);
	}):
}):


//in index.html:
<<script src="/socket.io/socket.io.js"></script>
<<script>
	var socket = io.connect("http://localhost:8080");
	// listen to messages
	socket.on('messages', function(data){
		alert(data.hello);

		// listen to message sfrom a chat
		$('#chat_form').submit(function(e){
			var message =$('#chat_input').val();

			// emit message event on the server
			socket.emit('message', message);
		});
	});
</script>

///////////////////////////////////

// but in a chat you'll have to broadcast:
// // on the server
io.on('connection', function(client){
	client.on('messages', function(data){
		client.broadcast.emit('messages', data);
	}):
}):
// // on the client side
<<script>
	...
	socket.on('messages', function(data){
		insertMessages(data); ///----> some jQuery function to insert data into html
	});
</script>

///////////////////////////////////
// But we want usernames so on the server side:
io.on('connection', function(client){
	client.on('join', function(data){
		client.nickname - name;
	}):
	client.on('messages', function(data){
		var nickname = client.nickname;
		client.broadcast.emit('message', nickname + ":" + message);

		// seee what you typed -> emit chat message to client
		client.emit("messages", nickname + ":" + message);
	});
});

// // on the client side
var server = io.connect("http://localhost:8080");
	// listen to messages
	server.on('connect', function(data){
		$('status').html('Connected to chattr');
		nickname = prompt("What is your nickname?");
		// emit join event on the server
		socket.emit('join', nickname);
		});
	});
///////////////////////////////////
// challenges
///////////////////////////////////

