function fizzBuzz(number) {
  for (let i = 1; i <= number; i++) {
    if (i % 3 === 0 && i % 15 === 0) {
      document.writeln(`<p>FizzBuzz</p>`);
    } else if (i % 3 === 0) {
      document.writeln(`<p>Fizz</p>`);
    } else if (i % 5 === 0) {
      document.writeln(`<p>Buzz</p>`);
    } else {
      document.writeln(`<p>${i}</p>`);
    }
  }
}

fizzBuzz(30);
