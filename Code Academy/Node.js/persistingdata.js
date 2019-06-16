var messages = [];
var storeMessages = function(name, data){
	messages.push({name: name, data: data});
	if (messages.length > 10) {
		messages.shift(); // remove the first one
	}
}



// when joined:
foreach (messages as message){

	client.emit.....
}

//--->>> store in non-blocking persistent database

var redisClient = redis.createClient();
var storeMessage = function(name, data){
	var message = JSON.stringify({name: name, data: data});

	redisClient.lpush("messages", message, function(err, response){
		redisClient.ltrim("messages", 0, 9); // keeps ten newest messages
	});

}

// retrieve messages
client.on('join', function(name){
	redisClient.lrange("messages", 0, -1, function(err, messages){
		messages = messages.reverse(): // reverse to put in correct border
		messages.forEach(function(message){
			message = JSON.parse(message);
			client.emit("messages", message.name+":"+message.data);
		});
	});
});


/// SETS : list of unique data
/*
	client.sadd("names", "Dog");
	client.sadd("names", "Spider");
	client.sadd("names", "Gregg");

	client.srem("names", "Dog");

	client.smembers("names", function(err, names){
		console.log(names); // lists all names in set
	});
	
	// add client
	client.on('join', function(name){
		client.broadcast.emit("add chatter", name);
		redisClient.smembers('names', function(err, names){
			names.forEach(function(name){
				client.emit('add chatter', name);
			});
		});
		redisClient.sadd("chatters", name);
	});
 */