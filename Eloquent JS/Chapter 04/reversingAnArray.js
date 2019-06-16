// Your code here.
function reverseArray (arr) {
  var newArray = [];
  for (var i = arr.length-1; i >= 0; i--) {
       newArray.push(arr[i]);
       }
  return newArray;
}

function reverseArrayInPlace(arr){
  var newArray = reverseArray(arr);
  for (var i = 0; i < arr.length; i++){
    arr[i] = newArray[i];
  }
}

// console.log(reverseArray(["A", "B", "C"]));
debug(reverseArray(["A", "B", "C"]));

// → ["C", "B", "A"];
var arrayValue = [1, 2, 3, 4, 5];
reverseArrayInPlace(arrayValue);
// console.log(arrayValue);
debug(arrayValue);

// → [5, 4, 3, 2, 1]