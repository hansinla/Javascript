function FirstReverse(str) { 

  // code goes here
  var temp = "";
  var len = str.length;
  for (i = 0; i < len; i++ ){
   temp = temp + str.charAt(len - 1 - i);
  }
  return temp; 
         
}
   
// keep this function call here 
// to see how to enter arguments in JavaScript scroll down
FirstReverse(readline());           

