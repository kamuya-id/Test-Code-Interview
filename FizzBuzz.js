var fizzBuzz = function(n, arr = []) {   
  
  if (n === 1) {                         
    arr.push('1');
    return arr.reverse();
  } else {                               
    if (n % 3 === 0 && n % 5 === 0) {
      arr.push('FizzBuzz');
    } else if (n % 5 === 0) {
      arr.push('Buzz');
    } else if (n % 3 === 0) {
      arr.push('Fizz');
    } else {
      arr.push('' + n);
    }
    return fizzBuzz(n - 1, arr);     
  }
}

console.log(fizzBuzz(10));