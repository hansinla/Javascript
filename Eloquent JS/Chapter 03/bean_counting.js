/*
Write a function countBs that takes a string as its only argument
and returns a number that indicates how many uppercase “B” characters are in the string.
Next, write a function called countChar that behaves like countBs,
except it takes a second argument that indicates the character that is to be counted
(rather than counting only uppercase “B” characters). 
Rewrite countBs to make use of this new function.
*/

function countsBs(str){
  return countChar(str, "B");
}

function countChar(str, char) {
  var counter = 0;
  for (var i = 0; i < str.length; i++) {
    if (str.charAt(i) == char) counter++;
  }
  return counter;
}

debug(countsBs("BoB"));
debug(countChar("BoB", "o"));
