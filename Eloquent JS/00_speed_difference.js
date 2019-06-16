function power(base, exponent) {
  if (exponent == 0){
    return 1;
  } else {
    return base * power(base, exponent - 1);
    }
  }

function powerFast(base, exponent) {
  var result = 1;
  while( exponent > 0){
    result *= base;
    exponent--;
  }
  return result;
}

var now = performance.now();
var answer = power(3, 10);
var elapsedTime =  performance.now() -  now;
console.log(answer, elapsedTime);

now = performance.now();
answer = powerFast(3, 10);
elapsedTime = performance.now() -  now;
console.log(answer, elapsedTime);
