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

    private $exceptions =  [
        3 => 'Fizz',
        5 => 'Buzz'
    ];

	/**
    * Play
    * Plays the FizzBuzz game up to number 100
	*/
	public function play(){
        $number = 1;
        while ($number <= 100) {
            $hasException = false;
            foreach ($this->exceptions as $exception => $word) {
                if ($number % $exception === 0) {
                    $hasException = true;
                    echo $word;
                }
            }

            if (!$hasException) {
                echo $number;
            }
            echo PHP_EOL;
            $number++;
        }
	}
}
