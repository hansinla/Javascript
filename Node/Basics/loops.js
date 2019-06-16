function countDownFor(start, stop){
	var i;
	if (start < stop){
		for (i = start ; i <= stop ; i++){
			console.log("Counter: " + i);
		}
	} else {
		for (i = start ; i >= stop ; i--){
			console.log("Counter: " + i);
		}
	}
}

function countDownWhile(start, stop){
	if (start < stop){
		while (start <= stop){
			console.log(start);
			start++;
		}
	} else {
		while (stop <= start){
			console.log(start);
			start--;
		}
	}

}

countDownFor(1, 10);
countDownFor(10, 1);
countDownWhile(2, 12);
countDownWhile(12, 2);