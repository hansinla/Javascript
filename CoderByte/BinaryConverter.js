// For this challenge you will be converting a number from binary to decimal.

function BinaryConverter(str) { 

	var reverseStr = "";
	var total = 0;
	var multiplier = 1;

	//reverse the input string

	for (var i = str.length - 1; i >= 0; i--) {
		reverseStr = reverseStr + str[i];
	};

	for (var i = 0; i < reverseStr.length; i++) {
		if (reverseStr[i] == "1") {
			total = total + multiplier;
		}
		multiplier = multiplier * 2;
	}
	return total;
         
}
   
// keep this function call here 
// to see how to enter arguments in JavaScript scroll down
BinaryConverter(readline());