/*
Using the JavaScript language, have the function PalindromeTwo(str) take the str parameter
being passed and return the string true if the parameter is a palindrome,
(the string is the same forward as it is backward) otherwise return the string false.

The parameter entered may have punctuation and symbols but they should not affect whether the string is in fact a palindrome.
For example: "Anne, I vote more cars race Rome-to-Vienna" should return true. 

Use the Parameter Testing feature in the box below to test your code with different arguments..
 */

function PalindromeTwo(str) {

	var revStr = "";

	//clean up source str
	var cleanString = str.replace(/[|&;$%@"<>()+,-?!]/g, "");
	// make all lowercase
	str = cleanString.toLowerCase();


    var wordArray = str.split(" ");
    str = "";
    for (var j = 0; j < wordArray.length; j++) {
       str = str + wordArray[j];
       
    }

    for (var i = 0; i < str.length; i++) {
        revStr = str.charAt(i) + revStr;
    }

    if (str == revStr) {
      return "true"; 
    } else {
          return "false"; 
    } 

         
}
   
// keep this function call here 
// to see how to enter arguments in JavaScript scroll down
debug(PalindromeTwo("racecar")); 