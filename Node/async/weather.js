var link = "http://api.openweathermap.org/data/2.5/weather?q=";
var key = "&units=metric&appid=fac0fa8a545361692244689ce37ebd1e";

module.exports = function(location, callback){

	var url = link + encodeURIComponent(location) + key;

	//console.log(location);

	var request = require("request");

	request({ url: url, json: true }, function(err, response, body){

		if(err){
			callback ("Unable to fetch weather.");
		} else {
			callback ("The temperature in " + body.name + 
				" is " + body.main.temp + "C.");
		}
	});
};