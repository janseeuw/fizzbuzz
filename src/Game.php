<?php

namespace FizzBuzz;

/**
 * Game
 * 
 * FizzBuzz prints numbers
 * if a number is dividable to 3 it won't print the number but the word Fizz. 
 * the same applies to dividable to the number 5 but instead of Fizz, it will print the word Buzz. 
 * when a number is dividable by 3 and 5, it will print FizzBuzz
 *
 */
class Game {
  
	/**
    * Play
    * Plays the FizzBuzz game up to number 100
	*/
	public function play(){
        $number = 1;
        while ($number <= 100) {
            if ($number % 3 === 0 && $number % 5 === 0) {
                echo "FizzBuzz".PHP_EOL;
                $number++;
                continue;
            }

            if ($number %3 === 0) {
                echo "Fizz".PHP_EOL;
                $number++;
                continue;
            }

            if ($number %5 === 0) {
                echo "Buzz".PHP_EOL;
                $number++;
                continue;
            }

            echo "$number".PHP_EOL;
            $number++;
        }
	}
}
