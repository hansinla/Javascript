function VowelCount(str) { 

  // code goes here 
  var vowels = "aeiou";
  var count = 0;

  for (i = 0; i < str.length; i++ ){
    var char = str.charAt(i);
	if (vowels.search(char) > -1) {
        	count++;
        }
  }
  
  
  
  return count; 
         
}
   
// keep this function call here 
// to see how to enter arguments in JavaScript scroll down
VowelCount(readline()); 