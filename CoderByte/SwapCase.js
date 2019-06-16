function SwapCase(str) { 

var temp = 0;
var retStr = "";

for (var i = 0; i < str.length; i++) {
	temp = str.charCodeAt(i);
	if (temp > 64 && temp < 91) {
		temp = temp + 32;
	} else if (temp > 96 && temp < 123) {
		temp = temp - 32;
	}
	retStr = retStr + String.fromCharCode(temp);
};

return retStr;
         
}
   
// keep this function call here 
// to see how to enter arguments in JavaScript scroll down
SwapCase(readline()); 