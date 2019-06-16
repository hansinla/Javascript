function RunLength(input) { 

    var encoding = [];
    input.match(/(.)\1*/g).forEach(function(substr){ encoding.push([substr.length, substr[0]]) });
    
  	var result = "";
  	for (var i = 0; i < encoding.length ; i++){
     	result = result + encoding[i]; 
    }
    return result.replace(/,/g, "");
}
   
// keep this function call here 
// to see how to enter arguments in JavaScript scroll down
RunLength(readline()); 