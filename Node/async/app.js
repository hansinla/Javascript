var weather  = require('./weather.js');
var location = require('./location.js');

// setup yargs with global level argument
var argv = require('yargs')
	.option('location', {
				alias: 'l',
				demand: false,
				description: "Enter your city.",
				type: "string"
	})
	.help('help')
	.argv;

// fetch weather
if (typeof argv.l === 'string' && argv.l.length > 0){
	//console.log("has location: " + argv.l);
	weather(argv.l, function(currentWeather){
		console.log(currentWeather);
	});
} else {
	//console.log("No location given");
	location(function(location){
		if(location){
			weather(location.city, function(currentWeather){
				console.log(currentWeather);
			});
		} else {
			console.log("Unable to get location.");
		}
	});
}
