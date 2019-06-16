// in custom_hello.js:

var hello = function() {
	console.log("Hello");
}

module.export = hello;

// in custom_goodbye.js:

exports,goodbye = function() {
	console.log("Bye");
}

// in app.js:

var hello = require('./custom_hello');
var gb = require('./custom_goodbye');
hello();
gb.goodbye();

///////////////////      ///////////////////
// in my_mudule.js
var foo = function() {...}
var bar = function() {...}
var baz = function() {...}

exports.foo = foo
export.bar = bar
//baz is a private function
//
// in app.js

var myMod = require('./my_module';)
myMod.foo();
myMod.bar();

///////////////////      ///////////////////

var http = require('http');
var message = "This is a message";
var options = {
	host: localhost,
	port: 8080,
	path: '/',
	method: 'POST'
}

var request = http.request(options, function(response) {
	response.on('data', function(data){
		console.log(data);
	});

});
request.write(message)
request.end();

///////// shrink this down to: ///////

var http = require('http');
var makeRequest = function(message) {
	var options = {
		host: localhost,
		port: 8080,
		path: '/',
		method: 'POST'
	}

	var request = http.request(options, function(response) {
		response.on('data', function(data){
			console.log(data);
		});

	});
	request.write(message)
	request.end();
}

makeRequest("This is a message");

///////// snow encapsulate: ///////
///// put this function in make_request.js and add the line
module.exports = makeRequest;

// Then in app.js:
// 
var makeRequest = require('./make_request'); // looks in same directory without the './' it looks iin the node_modules directory in the cuurent directory
makeRequest("This is a message");
makeRequest("This is another message");

/////////////////////////////////////////////////////
///
///// NPM installs packages in the node_modules dir
$ npm install request // makes a dir request
$ npm install coffee-script -g // install globally but can't be required
my_app/package.json file // specifies dependencies of modules

/// semantic versioning
"connect": "1.8.7"
//          major minor patch patch doesn't change API
//          
// ranges
//
"connect": "~1"    //>=1.0.0 < 2.0.0
"connect": "~1.8"  //>=1.8.0 < 1.9.0
"connect": "~1.8.7"//>=1.8.7 < 1.9.0


