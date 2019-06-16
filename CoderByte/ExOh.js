/*
Using the JavaScript language, have the function ExOh(str) take the str parameter
being passed and return the string true if there is an equal number of x's and o's,
otherwise return the string false. Only these two letters will be entered in the string,
no punctuation or numbers. For example: if str is "xooxxxxooxo" then the output
should return false because there are 6 x's and 5 o's. 
 */

function ExOh(str) {
	var dict = {};
	var count;
	
	for (var i = 0; i < str.length; i++) {
		if (dict.hasOwnProperty(str[i])) {
			dict[str[i]] =  dict[str[i]] + 1;
		} else {
			dict[str[i]] = 1;
		}
	}
	if (dict['x'] === dict['o']) {
		return "true";
	} else {
		return "false";
	}
}

