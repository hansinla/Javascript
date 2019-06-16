function LetterCapitalize(str) { 

  // code goes here
  var returnStr = "";
  var char = "";
  
  var wordArray = str.split(" ");
  for (i = 0; i < wordArray.length; i++) {
    word = wordArray[i];
    char = word.charAt(0);
    char = char.toUpperCase();
    returnStr = returnStr + char + word.substring(1, word.length);
    if (i < wordArray.length -1) {
     	returnStr = returnStr + " "; 
    }
  }
  
  return returnStr; 
         
}
   
// keep this function call here 
// to see how to enter arguments in JavaScript scroll down
LetterCapitalize(readline());           

