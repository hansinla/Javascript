function greetUser(name){
	if (typeof name === 'undefined'){
		console.log("the name is undefined");
	} else {
		console.log("Hello " + name);
	}
}

greetUser();
greetUser("Hans");