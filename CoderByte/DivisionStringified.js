function DivisionStringified(num1,num2) { 

  // code goes here
  var result = num1 / num2;
  if (result < 1000){
	return Math.round(result).toString();
	} else {
	var kilos = Math.round(result/1000).toString();
	var units = result % 1000;
	return (kilos+","+units);
	}

         
}
   
// keep this function call here 
// to see how to enter arguments in JavaScript scroll down
DivisionStringified(readline()); 