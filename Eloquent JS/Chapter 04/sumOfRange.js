function range(min, max, step){
	if (step === undefined) {step = 1;}
	var retArray = [];
	do{
		retArray.push(min);
		min += step;
	} while ( step > 0 ? min <= max : min >= max);
	return retArray;
}

function sum(arr){
	return arr.reduce(function(prev, next){
		return prev + next;
	});
}

debug(range(1, 10));