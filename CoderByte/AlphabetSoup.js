function AlphabetSoup(str) { 

var arr = [];
for (var i = 0; i < str.length; i++) {
		arr.push(str[i]);
	};
arr.sort();
var retStr = "";
for (var i = 0; i < arr.length; i++) {
	retStr =  retStr + arr[i];
};

return retStr;
         
}
   
// keep this function call here 
// to see how to enter arguments in JavaScript scroll down
AlphabetSoup(readline());           

