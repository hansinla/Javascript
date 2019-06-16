var person = {

	name: "hans",
	age: 56
};

var personJSON = JSON.stringify(person);

console.log(personJSON);
console.log(typeof personJSON);

var personObject = JSON.parse(personJSON);

console.log(personObject.name);
console.log(typeof personObject);

console.log("CHALLENGE");

var animal = '{"name": "Halley"}';

// convert to js object
var anObj = JSON.parse(animal);

// add age property
anObj.age = 12;

// convert to JSON log
var anJson = JSON.stringify(anObj);

console.log(anJson);