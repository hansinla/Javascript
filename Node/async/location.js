var url 	= "http://ipinfo.io/json";
var request = require("request");

module.exports = function(callback){

	request({ url: url, json: true }, function(err, response, body){

		if(err){
			console.log("Unable to fetch location.");
			callback();
		} else {
			callback (body);
		}
	});
};

// {
//     "ip": "24.205.94.32",
//     "hostname": "24-205-94-32.dhcp.psdn.ca.charter.com",
//     "city": "Altadena",
//     "region": "California",
//     "country": "US",
//     "loc": "34.2005,-118.1362",
//     "org": "AS20115 Charter Communications",
//     "postal": "91001"
// }
