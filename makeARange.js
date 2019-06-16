function makeRange (arr) {
	var range = [];
	for (var i = Math.min.apply(null, arr); i <= Math.max.apply(null, arr); i++) {
		range.push(i);
	}
	return range;
}

function smarterRange (arr) {
	var N = Math.abs(arr[0] - arr[1]) + 1;
	return Array.apply(null, {length: N}).map(function(curVal, index){ return index + Math.min.apply(null, arr); });
}

console.log("classic " + makeRange([10, 7]));
console.log("smarter " + smarterRange([7, 10]));