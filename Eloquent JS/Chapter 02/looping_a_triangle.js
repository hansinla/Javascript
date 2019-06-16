/*
Write a loop that makes seven calls to console.log to output the following triangle:
#
##
###
####
#####
######
#######
It may be useful to know that you can find the length of a string by writing .length after it.
var abc = "abc"; console.log(abc.length);
// → 3
*/

var string = "#";

for (var i = 0; i < 7; i++) {
  console.log(string);
  string += "#";
}
