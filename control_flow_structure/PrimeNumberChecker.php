<?php

// Challenge 2: Prime Number Checker
// Write a program that checks if a given number is prime. 
// Prompt the user to enter a number, and then display a message 
// indicating whether the number is prime or not.

function prime_checker_number($num){

	if($num < 2 ){
		echo(' not a prime number');
		return;
	}

	for($i = 2; $i <= sqrt($num); $i++){

		if($num % $i == 0 ){
			echo(" Not a prime number");
			return;
		}else{
			echo(" prime number");
			return;
		}

	}

}

prime_checker_number(2);

?>