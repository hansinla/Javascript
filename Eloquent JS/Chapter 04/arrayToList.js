function arrayToList (array) {
	var newList = {};
	while (array.length>0){
		newList.value =  array[0];
		array.shift();
		newList.rest = arrayToList (array);
	}
	return newList;
}

function listToArray(list){


}

function prepend(element, list) {
  var newList = {};
  newList["new"] = element;
  for (var i in list) {
    newList[i] = list[i];
  }
  return newList;
}


var array = [1, 2, 3, 4, 5];
var list = {a:1, b:2, c:3};
//console.log(arrayToList(array));
debug(prepend(0, list));