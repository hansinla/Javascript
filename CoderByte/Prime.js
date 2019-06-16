function PrimeTime(num) { 

	var number = parseInt(num);
	var isPrime = "true";

	if (number == 1) {
		isPrime = "false";
	} else {
		for (var i = 2; i <= number/2; ++i) {
			if ( number % i == 0) {
				isPrime = "false";
				break;
	        }
    	}
	}

	return isPrime;
         
}
   
// keep this function call here 
// to see how to enter arguments in JavaScript scroll down
PrimeTime(readline());           

