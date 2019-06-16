function LongestWord(sen) { 
    var longestWord = ""
    var longest = 0;
    var word = "";

    // code goes here
  var wordArray = sen.split(" ");
    for (i = 0; i < wordArray.length; i++) {
      word = wordArray[i];
      word = word.replace(/[\.,-\/#!$%\^&\*;:{}=\-_`~()]/g,"");
      if (word.length > longest) {
        longest = word.length;
        longestWord = word;
      }
    }
  return longestWord;      
}
   
// keep this function call here 
// to see how to enter arguments in JavaScript scroll down
LongestWord(readline());