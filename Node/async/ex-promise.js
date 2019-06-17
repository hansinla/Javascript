function doWorkPromise(data){
	return new Promise(function(resolve, reject){
		resolve("everything worked!");
		// reject({
		// 	error: 'something bad happened'
		// });
	});
}

doWorkPromise("some data").then(function(data){
	console.log(data + ' ' + "Done");
}, function(error){
	console.log(error);
});