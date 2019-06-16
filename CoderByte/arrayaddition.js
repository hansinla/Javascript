/*
For this challenge you will determine if numbers in an array
can add up to a certain number The largest value in the array) in the array.
 */

var arrAdd = function(arr) {
	// determine largest value in array
	var num = 0
	for (var i = 0; i < arr.length; i++) {
		if (arr[i] > num) num = arr[i];
	}
	debug(num);

	// get permutations
	arr = arr.slice(); // make a copy
	var permutations = [], stack = [];

	function recursion(){
		if (arr.length == 0) {
			permutations.push(stack.slice());
		}
		for (var i = 0; i < arr.length; i++) {
			var x = arr.splice(i, 1);
			stack.push(x);
			recursion();
			stack.pop();
			arr.splice(i, 0, x);
		}
	}

	recursion();

	// now loop over all permutations
	for (index in permutations) {
		var newArray = permutations[index];

		// now get slices of this permutation
		for ( i = 2; i < newArray.length ; i++) {
			var comb = newArray.slice(0,i);
			var total = 0;
			for (var j = 0; j < comb.length; j++) {
				total += parseInt(comb[j]);
			}
			debug(total);
		if (total == num) return "true";
		}
	}
	return "false";
}

debug(arrAdd([10,12,500,1,-5,1,0]))