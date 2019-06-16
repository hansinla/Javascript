function PowersofTwo(num) { 

    // code goes here
	var value = parseInt(num);
  
	if ((value & -value) == value) {
		return "true";
    } else {
    	return "false"; 
    }
}
   
// keep this function call here 
// to see how to enter arguments in JavaScript scroll down
PowersofTwo(readline()); 