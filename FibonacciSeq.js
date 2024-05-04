//FIBONACCI SEQUENCE ITERATION//
let num=0;
function fibonacci(num) {
  if(num < 2) {
      return num;
  }
  else {
      return fibonacci(num-1) + fibonacci(num - 2);
  }
}
// check if n is less than 100
    if (num >= 100){
        print("Invalid input. Please enter a number less than 100.")
    }

//  input from the user
const nTerms = prompt('Enter the number of terms: ');

if(nTerms <=0) {
  console.log('Enter a positive integer.');
}
else {
  for(let i = 0; i < nTerms; i++) {
      console.log(fibonacci(i));
  }
}