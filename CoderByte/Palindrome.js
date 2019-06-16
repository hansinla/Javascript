function Palindrome(str) { 

  // code goes here
  var revStr = "";
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
Palindrome(readline()); 