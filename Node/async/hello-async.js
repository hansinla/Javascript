// setTimeout(function(){
// 	console.log("Hello 1");
// }, 2000);

// setTimeout(function(){
// 	console.log("Hello 3");
// }, 1000);

// console.log("Hello 2");

console.log("Challenge");

function printInTwoSeconds(str){
	setTimeout(function(){
		console.log(str);
	}, 2000);
}

printInTwoSeconds("Hello, this is the delayed message!");