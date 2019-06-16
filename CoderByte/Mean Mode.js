function MeanMode(array) { 
  
  //The mean is the usual average
    var mean = 0;

	var total = array.reduce(function(a, b) {
		return a + b;
	});

	mean = total / array.length;


	//The mode is the number that is repeated more often than any other
	var mode = 0;
	var largest = 0;

	// Sort numerically 
	var numericComparison = function(x, y) { 
  		return x - y;
	};

	var sorted = array.sort(numericComparison);

	for ( i = 0; i < sorted.length - 1 ; i++ ) {
		var count = 0;
		if (sorted[i] == sorted[i+1]){
			count++;

			for ( j = i + 2 ; j < sorted.length - 1 ; j++) {
				if (sorted[i] == sorted[j]) {
					count++;
				}
			}

		if (count > largest) {
			mode = sorted[i];
			largest = count;
		}
	}
}


	// Determine is mean equals mode

	if (mean == mode) {
		return 1;
	} else {
		return 0;
	}
         
}
   
// keep this function call here 
// to see how to enter arguments in JavaScript scroll down
MeanMode(readline());                            















                            
                            
                            
  