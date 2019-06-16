// function definitions
// 


function displayGreeting(){
	document.write("Hey there, dude!");
}

function displayPlayerScore(x){
	document.write("Score: " + x);
}

function onButtonClick() {
	// body...
	alert("Hello World!");
}

function whenPageLoads(){
	alert("Welcome!");
}

function english() {
	alert("Hello! How are you?");
}

function spanish() {
	alert("Hola. Como estas?");
}

function hebrew() {
	alert("Shalom!");
}

function french() {
	alert("Bon Jour!");
}

function add(x, y){
	alert(x + y);
}

function subtract(x, y){
	alert(x - y);
}

function multiply(x, y){
	alert(x * y);
}

function divide(x, y){
	alert(x / y);
}

function mathProb(x, y, operator){
	switch (operator){
		case '+':
			alert(x + y);
			break;
		case '-':
			alert(x - y);
			break;
		case '*':
			alert(x * y);
			break;
		case '/':
			alert(x / y);
			break;
		default: alert("error");
	}	
}