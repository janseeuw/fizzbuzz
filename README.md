FizzBuzz
=========

This repo is the start to create an implementation of the popular game "FizzBuzz".

You're free to create your own implementation. You can use the test-suite to test your code or create extra tests.

The game
---------

You print numbers to a specified number and if a number is dividable to 3 you don't print the number but the word `Fizz`. 
The same applies to dividable to the number 5 but instead of `Fizz`, you use the word `Buzz`.
To make it a bit difficult to "play", when a number is dividable by 3 and 5, you print `FizzBuzz`.

So:

```
1
2
Fizz
4
Buzz
Fizz
7
8
Fizz
Buzz
11
Fizz
13
14
FizzBuzz
16
...
```

Requirements
-------------

- Use PHP 7.3+.
- The game should be "played" to the number 100.
- A class `Game` (in `src`-folder) will be initialized and a method `play` will be called. This will print the results of the above game.
