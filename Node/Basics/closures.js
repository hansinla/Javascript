/*
function greetMaker(name){
	function greet(){
		console.log("Hello " + name);
	}
	return greet;
}

var greetHans = greetMaker("Hans");
greetHans();
*/

// create function createAdder(baseNumber);
function createAdder(baseNumber){
	function add(num){
		return baseNumber + num;
	}
	return add;
}

var addten = createAdder(10);
console.log(addten(2));