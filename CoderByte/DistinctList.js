function DistinctList(arr) { 

  // code goes here 
  var newArray = [];
  var count = 0;
  for (i = 0; i < arr.length ; i++) {
   if (newArray.indexOf(arr[i]) == -1) {
    	newArray.push(arr[i]); 
   } else {
    	count++; 
   }
    
  }
  
  return count; 
         
}
   
// keep this function call here 
// to see how to enter arguments in JavaScript scroll down
DistinctList(readline());           

