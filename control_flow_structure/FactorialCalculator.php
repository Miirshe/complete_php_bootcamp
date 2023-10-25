<?php

// Challenge 4: Factorial Calculator
// Write a program that calculates the factorial of a given number. 
// Prompt the user to enter a number, and then display the factorial value.

function factorial_calculator($num){

	$factorial = 1 ;

	for($i = $num; $i  >= 1; $i--){

		$factorial *= $i; 

	}
	
	print $factorial;
}

factorial_calculator(5);


?>