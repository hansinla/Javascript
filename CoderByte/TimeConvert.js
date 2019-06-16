wfunction TimeConvert(num) { 

  // code goes here 
  var hours = Math.floor(num/60);
  var mins = num % 60;
  return (hours+":"+mins); 
         
}
   
// keep this function call here 
// to see how to enter arguments in JavaScript scroll down
TimeConvert(readline());           

