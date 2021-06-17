const fizzBuzz = [];
// fizzBuzz.push("didan");
// fizzBuzz.push("agung");

function addFizzBuzz(number) {
  for (let i = 1; i <= number; i++) {
    if (i % 3 === 0 && i % 15 === 0) {
      fizzBuzz.push("FizzBuzz");
    } else if (i % 3 === 0) {
      fizzBuzz.push("Fizz");
    } else if (i % 5 === 0) {
      fizzBuzz.push("Buzz");
    } else {
      fizzBuzz.push(i);
    }
  }
}

addFizzBuzz(20);
console.table(fizzBuzz);
