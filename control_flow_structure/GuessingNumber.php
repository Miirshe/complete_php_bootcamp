<?php

// Challenge 5: Guessing Game
// Write a program that generates a random number between 1 and 100.
// Prompt the user to guess the number and provide feedback 
// if the guess is too high or too low. Repeat the process until 
// the user guesses the correct number.


function guess_number($num){
	$r_number = rand(1,100);
	if($r_number == $num){
		print "The Random Number : $r_number";
		print "\nThe Guess Number : $num";
		print "\n your guess";
	}elseif($r_number > $num){

		$result = $r_number - $num;

		if($result > 10 ){
			print "The Random Number : $r_number";
			print "\nThe Guess Number : $num";
			print "\n your too low";
		}

	}elseif($num > $r_number){

		$result = $num - $r_number;

		if($result > 10 ){
			print "The Random Number : $r_number";
			print "\nThe Guess Number : $num";
			print "\n your too high";
		}
	}
}
guess_number(50);
?>