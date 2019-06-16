function LetterChanges(str) { 

  // code goes here
  //str = str.toUpperCase();
  var temp = "";
  var charCode = 0;
  var newChar = "";
  var vowels = "aeiou";

  for (i = 0; i < str.length; i++ ){
    charCode = str.charCodeAt(i);
    if (charCode > 96 && charCode < 123) {
      charCode = (charCode + 1);
      if (charCode >= 123) {
        charCode -= 26;
      }
      newChar = String.fromCharCode(charCode);
      if (vowels.search(newChar) > -1) {
        	newChar = newChar.toUpperCase();
        }
    } else {
      newChar =  str.charAt(i);
    }
    
    temp = temp + newChar;
  }

  return temp; 
         
}
 
// keep this function call here 
// to see how to enter arguments in JavaScript scroll down
LetterChanges(readline());           

