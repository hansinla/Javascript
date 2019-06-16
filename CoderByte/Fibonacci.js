// Fibonacci

var fib = function(n) {

	if (n == 0) {
		return 0;
	}

	var arr = new Array();
	arr[0] = 0;
	arr[1] = 1;
	for (var i = 2; i < n; i++) {
		arr[i] = arr[i - 1] + arr[i - 2];
	}

	return arr;
}

debug(fib(25));