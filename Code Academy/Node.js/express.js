// Express is Sinatra inspired web dev framework for Node.js
// 
$ npm install --save express // install dependencies

var express = require('express');
var app = express();

app.get('/', function(request, response){
	response.sendFie(__dirname+'/index.html');  // dirname = current dir
});
app.listen(8080);

////////////// more complex example: calling Twitter

var express = require('express');
var url = require('url');

app.get('/tweets/:username', function(req, response){

	var username = req.params.username;
	options = {
		protocol: "http:",
		host: "api.twitter.com",
		pathname: "/1/statuses/user_timeline.json",
		query: { screen_name: username, count: 10}
		//Twitter API changed needs extra authentication!
	}

	var twitterUrl = url.format(options);
	request(twitterUrl).pipe(response);
});

// How to get that json data into the html
// install template library

// my_app/package.json
"dependencies": {
	"express": "4.9.6",
	"ejs": "1.0.0"
}

// instead of using pipe -> use callback

request(url, function(err, res, body) {
	var tweets = JSON.parse(body);
	response.locals = {tweets: tweets, name: username};
	response.render("tweets.ejs");
});

//// challenge

var express = require('express');
var app = express();

var quotes = {
  'einstein': 'Life is like riding a bicycle. To keep your balance you must keep moving',
  'berners-lee': 'The Web does not just connect machines, it connects people',
  'crockford': 'The good thing about reinventing the wheel is that you can get a round one',
  'hofstadter': 'Which statement seems more true: (1) I have a brain. (2) I am a brain.'
};

app.get('/quotes/:name', function(request, response){
  response.end(quotes[request.params.name]);
});
app.listen(8080);




///////////


var url = require('url');

options = {
  // add URL options here
    protocol: 'http:',
        host: 'search.twitter.com',
		pathname: '/search.json',
  		 query: {q: q}

};

var searchURL = url.format(options);
console.log(searchURL);

////////////////

var express = require('express');
var app = express();
var server = require('http').createServer(app);
var io = require('socket.io')(server);

io.sockets.on('connection', function(client) {
  console.log("Client connected...");

  // listen for answers here
  client.on('answer', function(question, answer) {
    client.broadcast.emit('answer', question, answer);
  });

  client.on('question', function(question) {
    if(!client.question_asked) {
      client.question_asked = true;
      client.broadcast.emit('question', question);
    }
  });
});

server.listen(8080);

