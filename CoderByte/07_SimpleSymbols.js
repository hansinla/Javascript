function SimpleSymbols(str) { 
  var test = /[a-z]/

  // code goes here
  if (str.charAt(0).search(test) > -1 || str.charAt(str.length-1).search(test) > -1) {
  	return "false"; 
  } else {
   for (i = 1 ; i < str.length - 1 ; i++) {
    	if ( str.charAt(i).search(test) > -1 &&
            ( (str.charAt(i-1).search(/\+/) == -1) ||
             (str.charAt(i+1).search(/\+/) == -1))){
         return "false" 
        }
                                                 
   }
    
  }
        return 'true'; 
}
   
// keep this function call here 
// to see how to enter arguments in JavaScript scroll down
SimpleSymbols(readline()); 