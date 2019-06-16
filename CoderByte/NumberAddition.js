function NumberAddition(str) { 

	//For this challenge you will traverse a string
	//searching for all the numbers and then you will add them up.

	var total = 0;
	var arr = str.split(/\D/);

	for (var i = 0; i < arr.length; i++) {
      if (arr[i] != ""){
   			total = total +  parseInt(arr[i]);
      }
    }

	return total;
}
   
// keep this function call here 
// to see how to enter arguments in JavaScript scroll down
NumberAddition(readline());