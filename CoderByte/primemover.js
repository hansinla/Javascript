/*

Using the JavaScript language, have the function PrimeMover(num) return the numth prime number.
The range will be from 1 to 10^4.
For example: if num is 16 the output should be 53 as 53 is the 16th prime number. 

Use the Parameter Testing feature in the box below to test your code with different arguments.
*/
function PrimeMover(num) { 

  // code goes here
  var numOfprimes = 0;

  for (var i = 1 ; i < 10000; i++) {
  	debug(i);
  	debug(PrimeTime(i));
  	debug(numOfprimes);

  	if (PrimeTime(i)) {
  		numOfprimes++;
  		if (numOfprimes == num) {
  			return i;
  		}
  	}
  }
  return 0;      
}

function PrimeTime(arg) { 
	var isPrime = true;
	if (arg == 1) {
		isPrime = false;
	} else {
		for (var i = 2; i <= arg/2; ++i) {
			if ( arg % i == 0) {
				isPrime = false;
				break;
	        }
    	}
	}
	return isPrime;  
}
   
// keep this function call here 
// to see how to enter arguments in JavaScript scroll down
debug(PrimeMover(16));  
// 
//debug(PrimeTime(23));  